
function product(title,description,category,price,image) {
    document.getElementById('product_title').innerText=title;
    document.getElementById('product_description').innerText=description;
    document.getElementById('product_category').innerText=category;
    document.getElementById('product_price').innerText=price;
    document.getElementById('product_image').src=`./admin/miniatures/${image}.jpg`;
}


function shop_list(title,description,category,price,image) {
    document.getElementById('product_title').innerText=title;
    document.getElementById('product_description').innerText=description;
    document.getElementById('product_category').innerText=category;
    document.getElementById('product_price').innerText=price;
    document.getElementById('product_image').src=`../../admin/miniatures/${image}.jpg`;
}

