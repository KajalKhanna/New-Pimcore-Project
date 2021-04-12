<?php

namespace AppBundle\Controller;

use DateTime;
use Pimcore;
use Pimcore\Model\DataObject;
use Pimcore\Bundle\AdminBundle\Controller\Rest\AbstractRestController;
use Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse;
use Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Pimcore\Model\DataObject\Product;
use Pimcore\Model\DataObject\Category;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
use Pimcore\Model\DataObject\Objectbrick\Data\CookiePack;
//use Pimcore\Model\DataObject\Product\SpecificFeatures;

/**
 * Class RestController
 * @package AppBundle\Controller
 */

 class RestController extends AbstractRestController
 {
     CONST BASE_API_SERVICE = 'base_api_service';

     /**
      * @Route("/webservice/showProducts")
      * @Method({"GET"})
      * @param Request $request
      * @return \Symfony\Component\HttpFoundation\JsonResponse
      * @throws \Pimcore\Http\Exception\ResponseException
      * @throws \Exception
      */
    public function getProductList(Request $request, BruteforceProtectionHandler $bruteforceProtectionHandler)
    {
        $data = [];
        $product = new \Pimcore\Model\DataObject\Product\Listing();
               
        $product->getObjects();
        foreach ($product as $pro)
        {
            $data[] = $this->getProduct($pro);
           
        }
       
        if (!empty($data)) {
            return $this->createSuccessResponse($data, true);
        }
        return $this->createErrorResponse("No product found!", Response::HTTP_NOT_FOUND);
        
        
      
        
       
    }
   
   
    /**
      * @Route("/webservice/filterProduct")
      * @Method({"GET"})
      * @param Request $request
      * @return \Symfony\Component\HttpFoundation\JsonResponse
      * @throws \Pimcore\Http\Exception\ResponseException
      * @throws \Exception
      */
    public function getProductfilter(Request $request, BruteforceProtectionHandler $bruteforceProtectionHandler)
    {  
        $weight = $request->query->get('weight');
       $lowerprice = $request->query->get('lowerprice');
       $category = $request->query->get('category');
        $data = [];
        $product = new \Pimcore\Model\DataObject\Product\Listing();
        $product->getObjects();
        foreach ($product as $pro)
       {
       
        if($weight) {
                   if($lowerprice) {
                                if((strcasecmp($weight , $pro->getWeight()) == 0) && ($lowerprice < ($pro->getPrice())))
                                   {
                                    $data[] = $this->getProduct($pro);
                                   }
                               }
                   
                   elseif($category) {
      if((strcasecmp($weight , $pro->getWeight()) == 0) && ($lowerprice < ($pro->getPrice()) (strcasecmp($category ,
      $pro->getCategoryType() == 0))))
                            {
                                $data[] = $this->getProduct($pro);
                            }

                        }
                 
                   else {
                           if(strcasecmp($weight, $pro->getWeight()) == 0 )
                             {
                               $data[] = $this->getProduct($pro);
                             }

                       }
                  }
             
             
         elseif($lowerprice) {
                  if($lowerprice < ($pro->getPrice()))
                            {
                                $data[] = $this->getProduct($pro);
                            }

                        }
         elseif($category) {
            if((strcasecmp($category , $pro->getCategoryType()) == 0))
                                      {
                                          $data[] = $this->getProduct($pro);
                                      }
          
                                  }
          else {
                $data[] = $this->getProduct($pro);
               }
           
          }
          if (!empty($data))
          {
            return $this->createSuccessResponse($data, true);
          }
          return $this->createErrorResponse("No product found with given filter(s)!", Response::HTTP_NOT_FOUND);  
               
       
       
     
     
      }
     
      function getProduct(Product $pro)
      {  
        if($pro->getCategoryType()=="Cookie"){
          return [
                'productName' => $pro->getName(),
                'description' => $pro->getDescription(),
                'sku' => $pro->getSku(),
                'manufacture' => $pro->getManufacturedOn()->toDateString(),
                'expired' => $pro->getExpiry()->toDateString(),
                'image' => $pro->getImage(),
                'weight' => $pro->getWeight()->__toString(),
                'price' => $pro->getPrice()->__toString(),
                'category' => $pro->getCategoryType(),
               // $product = \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product getById(6);
              
                'productType' => $pro->getProductType()->getCookiePack()->getPackOf()
          
              
      ];
    }
   

    elseif($pro->getCategoryType()=="Muffin"){
        return [
              'productName' => $pro->getName(),
              'description' => $pro->getDescription(),
              'sku' => $pro->getSku(),
              'manufacture' => $pro->getManufacturedOn()->toDateString(),
              'expired' => $pro->getExpiry()->toDateString(),
              'image' => $pro->getImage(),
              'weight' => $pro->getWeight()->__toString(),
              'price' => $pro->getPrice()->__toString(),
              'category' => $pro->getCategoryType(),
             // $product = \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product getById(6);
            
              'productType' => $pro->getProductType()->getMuffinPack()->getMuffinPackOf()
        
             
             
    ];
  }



    else
    {



return [
                'productName' => $pro->getName(),
                'description' => $pro->getDescription(),
                'sku' => $pro->getSku(),
                'manufacture' => $pro->getManufacturedOn()->toDateString(),
                'expired' => $pro->getExpiry()->toDateString(),
                'image' => $pro->getImage(),
                'weight' => $pro->getWeight()->__toString(),
                'price' => $pro->getPrice()->__toString(),
                'category' => $pro->getCategoryType(),
               // $product = \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product getById(6);
              
                'productType' => $pro->getProductType()->getCookiePack()->getPackOf()
          
               
                //'capacity'     => $pro->getProductType()->getCookiePack()->getPackOf()->__toString(),
                // 'installation_type'     => $pro->getSpecificFeatures()->getAcFeatures()->getInstallationType(),
      ];

    }
     
}
      /**
     * @Route("/webservice/addProduct", methods={"PUT"})
     */
    public function addProduct(Request $request)
    {

        $data = json_decode($request->getContent(), true);

        dump($data);

        $cdate=date_create()->format('d-m-Y');
        $ndate = new DateTime($cdate);
        foreach($data as $row)
        {
            $obj = new \Pimcore\Model\DataObject\Product();
            $mkey=$row["key"];
            //$mparentID=$row["parentID"];
            $mpublished= $row["published"];
            $mName= $row["name"];
            $mDescription =$row["description"];
            $mSku= $row["Sku"];
            $mImage= $row["image"];
            $mWeight= $row["weight"];
            $mPrice= $row["price"];
            $mCategoryType=$row["categoryType"];
            $mManufacturedOn=$ndate;
            $mExpiry=$ndate;
            $mpackOf=$row["packOf"];
            $mflavour=$row["flavour"];
            $mnutritionalValue=$row["nutritionalValue"];
            $mcalories=$row["calories"];

            //$mActive =$row["active"];
            

            //$my_image_path = "/MyAssets/".$mImage;
            
            $mimage = \Pimcore\Model\Asset::getByPath($mImage);

            //$mcategoryCreatedAt=$ndate;
            //$mcategoryUpdateAt=$ndate;

            //dump($row["key"]);

            //dump($mkey);
            //dump($mparentID);
            //dump($mpublished);
            //dump($mcategoryName);
            //dump($mcategoryDescription);
            //dump($mcategoryCreatedAt);
            //dump($mcategoryUpdateAt);
            //dump($misCategoryActive);

            $obj->setKey($mkey);
            $obj->setParentId(6);
            $obj->setName($mName);
            $obj->setDescription($mDescription);
            $obj->setSku($mSku);
            $obj->setImage($mimage);
            $obj->setWeight(new DataObject\Data\QuantityValue($mWeight,'kg'));
            $obj->setPrice(new DataObject\Data\QuantityValue($mPrice,'Rs'));
            $obj->setCategoryType($mCategoryType);
            $obj->setManufacturedOn($mManufacturedOn);
            $obj->setExpiry($mExpiry);
            $objBrick = new DataObject\Objectbrick\Data\CookiePack($obj); 
       	       $objBrick->setPackOf($mpackOf);
       	       $obj->getProductType()->setCookiePack($objBrick);
       	       
       	       $objBrick2 = new DataObject\Objectbrick\Data\Flavour($obj); 
       	       $objBrick2->setFlavour($mflavour);
       	       $obj->getProductType()->setFlavour($objBrick2);
            $obj->getNutritionalValue($mnutritionalValue); 
            $obj->getCalories($mcalories); 

            
            //$obj->setActive($mActive);
           
           // $obj->setCategoryCreatedAt($mcategoryCreatedAt);
            //$obj->setCategoryUpdatedAt($mcategoryUpdateAt);
            $obj->setPublished(true);
            $obj->save();
        }

        //$this->checkPermission('objects');
        //Products listing
        //$brands = new Pimcore\Model\DataObject\Brand\Listing();
        //foreach ($brands as $key => $brand) {
        //    $data[] = array(
        //        "brand_name" => $brand->getBrandName(),
        //        "brand_description" => $brand->getBrandDescription(),
        //        //"id" => $brand->getBrandID()
        //    );
        //}

        return $this->adminJson(["success" => true]);
        //return new JsonResponse(['status' => 'product updated!']);
    }

   
    }

   
?>