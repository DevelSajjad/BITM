<?php
require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Products;
if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'all-products')
    {
        $category = new Category();
        $categories = $category->index();
        $products = new Products();
        $products = $products->index();
        include "pages/allProducts.php";
    } elseif ($_GET['pages'] == 'category-products')
    {
        $category = new Category();
        $categories = $category->index();
        $products = new Products();
        $products = $products->shortProducts($_GET['category_id']);
        include "pages/allProducts.php";
    }

    elseif ($_GET['pages'] == 'product-details')
    {
        $category = new Category();
        $categories = $category->index();
        $products = new Products();
        $productDetails = $products->getProductDetails($_GET['product_id']);
        include "pages/productDetails.php";
    }
}

