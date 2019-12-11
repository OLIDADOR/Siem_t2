function  DeleteProduct(){
    document.getElementById("selected_product").what_option.value = 1;  //1 se for para eliminar
    document.getElementById("selected_product").submit();
  }
  // making
  function  AddProduct(){
    document.getElementById("selected_product").what_option.value = 2;  //2 se for para adicionar
    document.getElementById("selected_product").submit();
  }

  function  EditProduct(){
    document.getElementById("selected_product").what_option.value = 3;  //3 se for para editar
    document.getElementById("selected_product").submit();
  }