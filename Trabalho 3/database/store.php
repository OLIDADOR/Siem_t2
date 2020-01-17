<?php

/*Função para ir buscar os 3 primeiros jogos mais vendidos*/
    function get_3_most_bestsellers() {
        global $conn;
        $stmt = $conn->prepare("SELECT A.id_game AS id_game, A.price AS price, B.n_sold AS units_sold FROM
                               (SELECT id_game,price FROM game) AS A
                                JOIN
                               (SELECT id_game, SUM(n_sold) AS n_sold FROM sales GROUP BY id_game) AS B
                                ON B.id_game = A.id_game 
                                ORDER BY B.n_sold 
                                DESC LIMIT 3
                                ;");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      /*Função para ir buscar todas as categorias */
      function get_all_categories(){
        global $conn;
        $stmt = $conn->prepare("SELECT category 
                               FROM game 
                               GROUP BY category
                               ORDER BY category
                               ASC
                               ;");
        $stmt->execute();
        return $stmt->fetchAll();
      }

      /*Função para ir buscar todas os developers*/
      function get_all_developers(){
        global $conn;
        $stmt = $conn->prepare("SELECT d_name
                                FROM developer 
                                GROUP BY d_name
                                ORDER BY d_name ASC
                                ;");
        $stmt->execute();
        return $stmt->fetchAll();
      }

      /*
      Função para ir buscar a query necessária para mostrar os produtos ao utilizador 
      Detetar o que se encontra nas opções -> processar e determinar qual das 5 querys deve ser a selecionada 
      
      Indice:
      -> 1 se for pela barra de pesquisa
      -> 2 se for category = All, Developer = All, Order = None
      -> 3 se for category = !All, Developer = All, Order = None
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
      function get_searched_product(){
        global $conn;
        if($_SESSION['search_choise'] == 1){

          $stmt = $conn->prepare("SELECT id_game, price
                                  FROM game
                                  WHERE g_name
                                  ILIKE '".$_SESSION['search_text']."%';
                                 ");
        $stmt->execute();
        return $stmt->fetchAll();
       }

       else if($_SESSION['search_choise'] == 2){
        $stmt = $conn->prepare("SELECT id_game,price
                                  FROM game
                                  ORDER BY
                                  g_name ASC 
                                 ;");
        $stmt->execute();
        return $stmt->fetchAll();
       }

       else if($_SESSION['search_choise'] == 3){
        $stmt = $conn->prepare("SELECT id_game, price
                                FROM game
                                WHERE category= ?;");
        $stmt->execute(array($_SESSION['category']));
        return $stmt->fetchAll();                         

     }

       else if($_SESSION['search_choise'] == 4){
        $stmt = $conn->prepare("SELECT 
                                  B.id_game AS id_game,
                                  B.price AS price FROM
                                  (SELECT id_game FROM developer WHERE d_name=?)AS A
                                  JOIN
                                  (SELECT id_game, price FROM game) AS B
                                  ON A.id_game = B.id_game;");

        $stmt->execute(array($_SESSION['developer']));
        return $stmt->fetchAll();
      }

      else if($_SESSION['search_choise'] == 5){
        $stmt = $conn->prepare("SELECT 
                                B.id_game AS id_game,
                                B.price AS price FROM
                                (SELECT id_game FROM developer WHERE d_name=?)AS A
                                JOIN
                                (SELECT id_game,price FROM game WHERE category=?) AS B
                                ON A.id_game = B.id_game;");

        $stmt->execute(array($_SESSION['developer'], $_SESSION['category']));
        return $stmt->fetchAll();                        
    }

    else if($_SESSION['search_choise'] == 6){
      $stmt = $conn->prepare("SELECT id_game, price
                              FROM game
                              ORDER BY
                              price ASC;");
      $stmt->execute();
      return $stmt->fetchAll();                          
  }

    else if($_SESSION['search_choise'] == 7){
      $stmt = $conn->prepare("SELECT id_game, price
                              FROM game
                              WHERE category= ? 
                              ORDER BY price ASC;");

      $stmt->execute(array($_SESSION['category']));
      return $stmt->fetchAll();                          
  }

    else if($_SESSION['search_choise'] == 8){
      $stmt = $conn->prepare("SELECT 
                              B.id_game AS id_game, B.price AS price FROM
                             (SELECT id_game FROM developer WHERE d_name=?)AS A
                             JOIN
                             (SELECT id_game,price FROM game) AS B
                             ON A.id_game = B.id_game ORDER BY B.price ASC;");

      $stmt->execute(array($_SESSION['developer']));
      return $stmt->fetchAll();                         
    }

    else if($_SESSION['search_choise'] == 9){
      $stmt = $conn->prepare("SELECT B.id_game AS id_game, B.price AS id_price FROM
                             (SELECT id_game FROM developer WHERE d_name=?)AS A
                             JOIN
                             (SELECT id_game,price FROM game WHERE category=?) AS B
                             ON A.id_game = B.id_game ORDER BY B.price ASC;");

      $stmt->execute(array($_SESSION['developer'], $_SESSION['category']));
      return $stmt->fetchAll();                         
    }

    else if($_SESSION['search_choise'] == 10){
      $stmt = $conn->prepare("SELECT id_game, price
                              FROM game
                              ORDER BY price DESC;");

       $stmt->execute();
       return $stmt->fetchAll();                         
    }

    else if($_SESSION['search_choise'] == 11){
      $stmt = $conn->prepare("SELECT id_game, price
                              FROM game
                              WHERE category= ?
                              ORDER BY price DESC;");

      $stmt->execute(array($_SESSION['category']));
      return $stmt->fetchAll();                          
    }

    else if($_SESSION['search_choise'] == 12){
      $stmt = $conn->prepare("SELECT B.id_game AS id_game, B.price AS price FROM
                            (SELECT id_game FROM developer WHERE d_name = ?)AS A
                             JOIN
                            (SELECT id_game,price FROM game) AS B
                            ON A.id_game = B.id_game ORDER BY B.price DESC;");

      $stmt->execute(array($_SESSION['developer']));
      return $stmt->fetchAll();                        
    }   
         
    else if($_SESSION['search_choise'] == 13){
      $stmt = $conn->prepare("SELECT B.id_game AS id_game, B.price AS price FROM
                             (SELECT id_game FROM developer WHERE d_name = ?)AS A
                             JOIN
                             (SELECT id_game,price FROM game WHERE category = ?) AS B
                             ON A.id_game = B.id_game ORDER BY B.price DESC;");

      $stmt->execute(array($_SESSION['developer'], $_SESSION['category']));
      return $stmt->fetchAll();                         
    }

    else if($_SESSION['search_choise'] == 14){
          $stmt = $conn->prepare("SELECT A.id_game AS id_game, A.price AS price, B.n_sold AS units_sold FROM
                                (SELECT id_game,price FROM game) AS A
                                JOIN
                                (SELECT id_game, SUM(n_sold) AS n_sold FROM sales GROUP BY id_game) AS B
                                ON B.id_game = A.id_game ORDER BY B.n_sold DESC;");

          $stmt->execute();
          return $stmt->fetchAll();                        
        }

    else if($_SESSION['search_choise'] == 15){
          $stmt = $conn->prepare("SELECT A.id_game AS id_game, A.price AS price, B.n_sold AS units_sold FROM
                                 (SELECT id_game,price FROM game where category = ?) AS A
                                 JOIN
                                 (SELECT id_game, SUM(n_sold) AS n_sold FROM sales GROUP BY id_game) AS B
                                 ON B.id_game = A.id_game ORDER BY B.n_sold DESC;");

          $stmt->execute(array($_SESSION['category']));
          return $stmt->fetchAll();                         
        }

    else if($_SESSION['search_choise'] == 16){
      $stmt = $conn->prepare("SELECT B.id_game AS id_game, B.price AS price, C.n_sold AS units_sold FROM
                             (SELECT id_game FROM developer WHERE d_name = ?)AS A
                             JOIN
                             (SELECT id_game,price FROM game) AS B
                             ON A.id_game = B.id_game
                             JOIN
                             (SELECT id_game, SUM(n_sold) AS n_sold FROM sales GROUP BY id_game) AS C
                             ON C.id_game = A.id_game ORDER BY C.n_sold DESC;");

      $stmt->execute(array($_SESSION['developer']));
      return $stmt->fetchAll();                         
    }

    else if($_SESSION['search_choise'] == 17){
      $stmt = $conn->prepare("SELECT B.id_game AS id_game, B.price AS price, C.n_sold AS units_sold FROM
                            (SELECT id_game FROM developer WHERE d_name = ?)AS A
                            JOIN
                            (SELECT id_game,price FROM game WHERE category = ?) AS B
                            ON A.id_game = B.id_game
                            JOIN
                            (SELECT id_game, SUM(n_sold) AS n_sold FROM sales GROUP BY id_game) AS C
                            ON C.id_game = A.id_game ORDER BY C.n_sold DESC;");

      $stmt->execute(array($_SESSION['developer'], $_SESSION['category']));
      return $stmt->fetchAll();                        
    }
      }

    function get_product_information($id_game){
      global $conn;
        $stmt = $conn->prepare("SELECT A.id_game, g_name, launch_date, category, platform, d_name AS developer, g_description, price FROM
                               (SELECT id_game, category, price, platform, g_name, launch_date, g_description, n_keys
                                FROM game
                                WHERE id_game = ?) AS A
                                JOIN
                                (SELECT id_game, d_name FROM developer) AS B
                                ON A.id_game = B.id_game;
                                ");

        $stmt->execute(array($id_game));
        return $stmt->fetchAll();
    }

    function add_to_user_cart($id_game, $user){
      global $conn;
        $stmt = $conn->prepare("INSERT INTO cart (id_purchase, id_game, id_buyer)
                                VALUES (DEFAULT, ?,
                               (SELECT id FROM credentials WHERE username = ?));");

        $stmt->execute(array($id_game, $user));
        return $stmt->fetchAll();
    }

   function get_user_cart($user){
      global $conn;
      $stmt = $conn->prepare("SELECT A.id_game ,A.g_name, A.category, A.price, B.quantity FROM
                             (SELECT id_game, g_name, category, price FROM game) AS A
                              JOIN
                             (SELECT id_game, COUNT(id_game) AS quantity FROM cart WHERE id_buyer = (SELECT id FROM credentials WHERE username = ?) GROUP BY id_game) AS B 
                              ON A.id_game = B.id_game;");

        $stmt->execute(array($user));
        return $stmt->fetchAll();
   }
   function remove_game_from_user_cart($id_game, $user){
      global $conn;
      $stmt = $conn->prepare("DELETE FROM cart
                              WHERE id_game = ?
                              AND  
                              id_buyer = (SELECT id FROM credentials WHERE username = ?);");

        $stmt->execute(array($id_game, $user));
        return $stmt->fetchAll();
   }

   function get_cart_total($user){
     global $conn;
     $stmt = $conn->prepare("SELECT SUM(A.price*B.quantity) AS total FROM
                            (SELECT id_game, g_name, category, price FROM game) AS A
                            JOIN
                            (SELECT id_game,
                             COUNT(id_game) AS quantity
                             FROM cart
                             WHERE id_buyer = (SELECT  id FROM credentials WHERE username = ?) group by cart.id_game) AS B
                             ON A.id_game = B.id_game;");

      $stmt->execute(array($user));
      return $stmt->fetch();
   }

   function checkout($user){
     global $conn;
     $stmt = $conn->prepare("DELETE FROM cart WHERE 
                             id_buyer = (SELECT id FROM credentials WHERE username = ?);");

     $stmt->execute(array($user));
     return $stmt->fetchAll();
   }

   function update_sales($quantity, $id_game, $user){
     global $conn;
     $stmt = $conn->prepare("INSERT INTO sales (id_sales, n_sold, id_game, id_buyer)
                             VALUES (DEFAULT, ?, ? 
                             ,(SELECT id FROM credentials WHERE username = ?))");

     $stmt->execute(array($quantity, $id_game, $user));
     return $stmt->fetchAll();
   }

   function get_sales(){
    global $conn;
    $stmt = $conn->prepare("SELECT id_sales AS sale_id, n_sold AS sold_copys, g_name, username FROM
                           (SELECT * FROM sales) AS A
                            JOIN
                           (SELECT id_game, g_name FROM game ) AS B
                            ON A.id_game = B.id_game
                            JOIN
                           (SELECT id, username FROM credentials) AS C
                            ON C.id = A.id_buyer;");

    $stmt->execute();
    return $stmt->fetchAll();
   }

   function confirm_one_sale($sale_id){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM sales
                            WHERE id_sales = ?;");

    $stmt->execute(array($sale_id));
    return $stmt->fetchAll();
   }

   function confirm_all_sales(){
    global $conn;
    
    $stmt = $conn->prepare("DELETE FROM sales;");
    $stmt->execute();
    return $stmt->fetchAll();
   }
   

?>