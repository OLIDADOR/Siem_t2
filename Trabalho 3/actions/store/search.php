<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/store.php');  



$category= $_POST['category'];
$developer = $_POST['developer'];
$order = $_POST['order'];
$search_text = strip_tags($_POST['search_text']);

/*
Indice:
-> 1 se for pela barra de pesquisa
-> 2 se for category = All, Developer = All, Order = None
-> 3 se for category != All, Developer = All, Order = None
-> 4 se for category = All, Developer != All, Order = None
-> 5 se for category != All, Developer != All, Order = None

-> 6 se category = All, Developer = All, Order = Price Low
-> 7 se category != All, Developer = All, Order = Price Low 
-> 8 se category = All, Developer != All, Order = Price Low 
-> 9 se category != All, Developer != All, Order = Price Low 

-> 10 se category = All, Developer = All, Order = Price High 
-> 11 se category != All, Developer = All, Order = Price High 
-> 12 se category = All, Developer != All, Order = Price High 
-> 13 se category != All, Developer != All, Order = Price High 

-> 14 se category = All, Developer = All, Order = Bestseller
-> 15 se category != All, Developer = All, Order = Bestseller 
-> 16 se category = All, Developer != All, Order = Bestseller 
-> 17 se category != All, Developer != All, Order = Bestseller 
*/

/*Ver se está alguma coisa escrita no search e poe na variavel de sessão */
if((strcmp($search_text, '')!=0)){

    $_SESSION['search_choise'] = 1;
    $_SESSION['search_text'] = $search_text;
    header("Location:  $BASE_URL" . '/pages/store/store_display.php');
  }

  /*ORDER FOR NONE*/

    /*Se category = All e Developer = All e Order = None*/
    else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_none')==0) 
            )
            { 
                $_SESSION['search_choise'] = 2;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }
            
        /*Se category != All e Developer = All e Order = None*/       
        else if(
        (strcmp($category,'category_all') != 0)
            and
        (strcmp($developer,'developer_all') == 0)
            and 
        (strcmp($order,'order_none')==0) 
        )
        { 
            $_SESSION['search_choise'] = 3;
            $_SESSION['category'] = $category;
            header("Location:  $BASE_URL" . '/pages/store/store_display.php');
        }

        /*Se category = All e Developer != All e Order = None*/      
        else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_none')==0) 
            )
            { 
                $_SESSION['search_choise'] = 4;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer != All e Order  None*/      
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_none')==0) 
            )
            { 
                $_SESSION['search_choise'] = 5;
                $_SESSION['category'] = $category;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

    /*ORDER FOR PRICE LOW*/

        /*Se category = All e Developer = All e Order = Price Low*/      
        else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_price_low')==0) 
            )
            { 
                $_SESSION['search_choise'] = 6;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer = All e Order = Price Low*/      
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_price_low')==0) 
            )
            { 
                $_SESSION['search_choise'] = 7;
                $_SESSION['category'] = $category;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category = All e Developer != All e Order = Price Low*/      
        else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_price_low') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 8;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer != All e Order = Price Low*/  
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_price_low') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 9;
                $_SESSION['category'] = $category;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

/*ORDER FOR PRICE HIGH*/
         /*Se category = All e Developer = All e Order = Price High*/      
         else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_price_high')==0) 
            )
            { 
                $_SESSION['search_choise'] = 10;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer = All e Order = Price High*/      
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_price_high')==0) 
            )
            { 
                $_SESSION['search_choise'] = 11;
                $_SESSION['category'] = $category;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category = All e Developer != All e Order = Price High*/      
        else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_price_high') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 12;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer != All e Order = Price High*/  
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_price_high') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 13;
                $_SESSION['category'] = $category;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

/*ORDER FOR BESTSELLER*/
         /*Se category = All e Developer = All e Order = Bestseller*/      
         else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_sold_best')==0) 
            )
            { 
                $_SESSION['search_choise'] = 14;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer = All e Order = Price Bestseller*/      
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') == 0)
                and 
            (strcmp($order,'order_sold_best')==0) 
            )
            { 
                $_SESSION['search_choise'] = 15;
                $_SESSION['category'] = $category;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category = All e Developer != All e Order = Price Bestseller*/      
        else if(
            (strcmp($category,'category_all') == 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_sold_best') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 16;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }

        /*Se category != All e Developer != All e Order = Price Bestseller*/  
        else if(
            (strcmp($category,'category_all') != 0)
                and
            (strcmp($developer,'developer_all') != 0)
                and 
            (strcmp($order,'order_sold_best') == 0) 
            )
            { 
                $_SESSION['search_choise'] = 17;
                $_SESSION['category'] = $category;
                $_SESSION['developer'] = $developer;
                header("Location:  $BASE_URL" . '/pages/store/store_display.php');
            }        

?>
 