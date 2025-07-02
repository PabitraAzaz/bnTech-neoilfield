<?php



namespace App\Controllers\AdminController;



use App\Controllers\BaseController;



use App\Models\ProductModel;



class ProductController extends BaseController

{

    public function index()

    {

        $productModel = new ProductModel();
        $prodData = $productModel->select('p_id,p_title,p_main_img,p_actual_price,p_offer_price,sku')->findAll();

        return view('admin/product/index', ['prod' => $prodData]);
    }



    public function create()

    {
        helper('form');
        $session = session();

        if ($this->request->getMethod() === 'GET') {
            // $productModel = new ProductModel();

            // $prodData = $productModel->findAll();
            return view('admin/product/create');
        } else {




            $image = \Config\Services::image();

            if (

                $this->validate(

                    [
                        'p_main_img' => 'uploaded[p_main_img]|is_image[p_main_img]|mime_in[p_main_img,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_main_img, 2048]',
                        'p_other_img' => 'is_image[p_main_img]|mime_in[p_main_img,image/jpg,image/jpeg,image/png,image/webp]',
                        'p_title' => 'required|max_length[124]',
                        'p_actual_price' => 'required',
                        'p_offer_price' => 'permit_empty',
                        'p_description' => 'required',
                        'p_star' => 'permit_empty|less_than_equal_to[5]|greater_than_equal_to[1]',
                        'p_total_review' => 'permit_empty',
                        'sku' => 'permit_empty',
                        'tags' => 'permit_empty',
                        'status' => 'required|in_list[active,inactive]',
                    ],

                    [
                        'p_main_img' => [
                            'uploaded' => 'Please upload a Product image',
                            'is_image' => 'Please upload a valid Product image',
                            'mime_in' => 'Please upload a valid image type of Product Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'
                        ],
                        'p_other_img' => [
                            'is_image' => 'Please upload valid Other Image Product images',
                            'mime_in' => 'Please upload a valid image type of Other Image Product',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Other Image Product'
                        ],
                        'p_title' => [
                            'required' => 'Please fill Product Name',
                            'max_length' => 'Product Name is too large'
                        ],
                        'p_actual_price' => [
                            'required' => 'Please fill Product Actual Price',
                        ],
                        'p_description' => [
                            'required' => 'Please fill Product Description',
                        ],
                        // 'p_offer_price' => [
                        //     'required' => 'Please fill Product Name',
                        // ],
                        'p_star' => [
                            'required' => 'Please fill rating',
                            'less_than_equal_to' => 'Rating must be 5 or less.',
                            'greater_than_equal_to' => 'Rating must be at least 1.'
                        ],
                    ]
                )

            ) {



                $productModel = new ProductModel();

                $mainFile = $this->request->getFile('p_main_img');
                $mainFileName = null;
                if ($mainFile && $mainFile->isValid() && !$mainFile->hasMoved()) {
                    $ext = $mainFile->getClientExtension();
                    $mainFileName = 'Product_' . time() . '.' . $ext;
                    $mainFile->move('uploads/products/main-product/', $mainFileName);
                }



                $otherFileNames = [];

                if ($this->request->getFileMultiple('p_other_img')) {
                    foreach ($this->request->getFileMultiple('p_other_img') as $index => $file) {
                        if ($file->isValid() && !$file->hasMoved() && $file->getClientExtension()) {
                            $ext = $file->getClientExtension();
                            $filename = 'Product_' . time() . '_' . $index . '.' . $ext;
                            $file->move('uploads/products/other-images/', $filename);
                            $otherFileNames[] = $filename;
                        }
                    }
                }
                // ✅ Set null if no valid images
                $otherImagesString = !empty($otherFileNames) ? implode('|', $otherFileNames) : null;


                $result = $productModel->save([
                    'p_main_img' => $mainFileName,
                    'p_other_img' => $otherImagesString,
                    'p_title' => $this->request->getPost('p_title'),
                    'p_actual_price' => $this->request->getPost('p_actual_price'),
                    'p_offer_price' => $this->request->getPost('p_offer_price'),
                    'p_description' => $this->request->getPost('p_description'),
                    'p_star' => $this->request->getPost('p_star'),
                    'p_total_review' => $this->request->getPost('p_total_review'),
                    'sku' => $this->request->getPost('sku'),
                    'status' => $this->request->getPost('status'),
                    'tags' => $this->request->getPost('tags'),
                ]);


                if ($result) {

                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Product', "type" => "success"]);

                    return redirect()->to(site_url("admin/products"));
                } else {

                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);

                    return redirect()->to(site_url("admin/products/create"));
                }
            } else {




                // echo '<pre>';
                // print_r($this->validator->getErrors());
                // exit;


                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }



    // public function edit($id)

    // {

    //     helper('form');

    //     $session = session();

    //     if ($this->request->getMethod() === 'GET') {

    //         $prodModel = new ProductModel();







    //         $prod = $prodModel->where('p_id', $id)->first();





    //         return view('admin/product/edit', ['prod' => $prod]);
    //     } else {

    //         $image = \Config\Services::image();

    //         $session = session();



    //         // echo '<pre>';

    //         //  print_r($_FILES);exit;



    //         if (

    //             $this->validate(

    //                 [

    //                     'p_image' => 'is_image[p_image]|mime_in[p_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_image, 2048]',

    //                     // 'p_categories' => 'required',



    //                     'p_name' => 'max_length[124]',

    //                     'p_tags' => 'max_length[124]',

    //                     'p_rating' => 'less_than_equal_to[5]|greater_than_equal_to[1]',



    //                 ],

    //                 [

    //                     'p_image' => [



    //                         // 'uploaded' => 'Please upload a Product image',

    //                         'is_image' => 'Please upload a valid Product image',

    //                         'mime_in' => 'Please upload a valid image type of Product Image',

    //                         'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'

    //                     ],



    //                     'p_categories' => [

    //                         // 'required' => 'Please Select Category Name',

    //                     ],



    //                     'p_name' => [

    //                         // 'required' => 'Please fill Product Name',

    //                         'max_length' => 'Product Name is too large'

    //                     ],



    //                     'p_rating' => [

    //                         //  'required' => 'Please fill rating',

    //                         'less_than_equal_to' => 'Rating must be 5 or less.',

    //                         'greater_than_equal_to' => 'Rating must be at least 1.'

    //                     ],

    //                     'p_tags' => [

    //                         // 'required' => 'Please fill tags',

    //                     ]

    //                 ]

    //             )

    //         ) {





    //             $newfilename = null;

    //             // $newfilename1 = null;



    //             $prodModel = new ProductModel();

    //             $oldresult = $prodModel->select('p_image')->where('p_id', $id)->first();


    //             $file = $this->request->getFile("p_image");

    //             if (trim($file) !== '') {

    //                 // $file = $this->request->getFile("p_image");

    //                 $thumbnail = $file->getName();

    //                 // Renaming file before upload

    //                 $temp = explode(".", $thumbnail);



    //                 $newfilename = round(microtime(true)) . '.' . end($temp);

    //                 $newfilename = "Product_" . $newfilename;





    //                 $image->withFile($file)->save('public/assets/img/product-new/main-product-new/' . $newfilename, 70);
    //             }



    //             // $side_image1 = $this->request->getFile("trip_map_image");

    //             // if (trim($side_image1) !== '') {

    //             //     // $file = $this->request->getFile("trip_map_image");

    //             //     $thumbnail = $side_image1->getName();

    //             //     // Renaming file before upload

    //             //     $temp = explode(".", $thumbnail);



    //             //     $newfilename1 = round(microtime(true)) . '.' . end($temp);

    //             //     $newfilename1 = "Tour_Trip_-" . $newfilename1;

    //             //     $image->withFile($side_image1)->save('uploads/tours/tripmaps/' . $newfilename1, 70);

    //             // }





    //             $p_tags = $this->request->getPost('p_tags');

    //             if ($p_tags === 'None') {

    //                 $p_tags = null; // Set to NULL if "None" is selected

    //             }





    //             $result = [

    //                 'p_name' => $this->request->getPost('p_name'),

    //                 'p_categories' => $this->request->getPost('p_categories'),

    //                 'p_rating' => $this->request->getPost('p_rating'),

    //                 'p_tags' => $p_tags,



    //             ];







    //             if ($newfilename !== null) {

    //                 $result['p_image'] = $newfilename;

    //                 $this->remFile('public/assets/img/product-new/main-product-new/' . $oldresult['p_image']);
    //             }





    //             $result = $prodModel->update($id, $result);



    //             if ($result) {

    //                 $session->setFlashdata('msg', ["msg" => 'You have successfully Update a Product', "type" => "success"]);

    //                 return redirect()->to(base_url("/admin/product/edit/" . $id));
    //             } else {

    //                 $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => 'Unknown Error'], "type" => "warning"]);

    //                 return redirect()->to(base_url("/admin/product/edit/" . $id));
    //             }
    //         } else {

    //             $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);

    //             return redirect()->to(base_url("/admin/product/edit/" . $id));
    //         }
    //     }
    // }






    public function delete($id)
    {
        $session = session();
        $prodModel = new ProductModel();

        $product = $prodModel->select('p_main_img, p_other_img')->where('p_id', $id)->first();

        if (!empty($product)) {

            // Define paths
            $mainfilePath = 'uploads/products/main-product/' . $product['p_main_img'];
            $otherfilePath = 'uploads/products/other-images/';

            // Delete main image using your helper
            $this->remFile($mainfilePath);

            // Delete other images
            if (!empty($product['p_other_img'])) {
                $otherImages = explode('|', $product['p_other_img']);
                foreach ($otherImages as $img) {
                    $this->remFile($otherfilePath . $img);
                }
            }

            // Delete product record from DB
            if ($prodModel->delete($id)) {
                $session->setFlashdata('msg', [
                    'msg' => 'Successfully Deleted the Product',
                    'type' => 'success'
                ]);
            } else {
                $session->setFlashdata('invalid_creds', [
                    'errors' => 'Something went wrong while deleting.',
                    'type' => 'danger'
                ]);
            }

            return redirect()->to(site_url("admin/products"));
        } else {
            $session->setFlashdata('invalid_creds', [
                'errors' => 'Product Not Found',
                'type' => 'danger'
            ]);

            return redirect()->to(site_url("admin/products/" . $id));
        }
    }
}
