<?php
class Produit
{
    private $product_title;
    private $product_category;
    private $product_company;
    private $product_image;
    private $product_price;

    public function __construct($title, $category, $company, $image, $price)
    {
        $this->product_title = $title;
        $this->product_category = $category;
        $this->product_company = $company;
        $this->product_image = $image;
        $this->product_price = "Price $" . $price;
    }
    public function __destruct()
    {
    }

    public function getTitle()
    {
        return $this->product_title;
    }
    public function getCategory()
    {
        return $this->product_category;
    }
    public function getCompany()
    {
        return $this->product_company;
    }
    public function getImage()
    {
        return $this->product_image;
    }
    public function getPrice()
    {
        return $this->product_price;
    }
}


//la classe member pour reccuperer les info  du membre connecter
class Member
{
    private $member_id;
    private $member_name;
    private $member_email;
    private $member_phone;
    private $member_city;
    private $member_zipcode;
    private $member_province;
    private $member_adress;

    public function __construct($id)
    {
        //reccuperation de l'id
        $this->member_id = $id;
        //importation de la base de donnees
        include '../../php/db.php';
        //recupperation des informations
        $requser = $bdd->prepare('SELECT * FROM members WHERE id = ?');
        $requser->execute(array($id));
        $user = $requser->fetch();
        //assignation des donnees recueillis
        $this->member_id = $user['id'];
        $this->member_name = $user['pseudo'];
        $this->member_email = $user['email'];
        $this->member_phone = $user['phone'];
        $this->member_adress = $user['adress'];
        $this->member_city = $user['city'];
        $this->member_zipcode = $user['zipcode'];
        $this->member_province = $user['province'];
    }
    public function getID()
    {
        return $this->member_id;
    }
    public function getName()
    {
        return $this->member_name;
    }
    public function getEmail()
    {
        return $this->member_email;
    }

    public function getPhone()
    {
        return $this->member_phone;
    }
    public function getAdress()
    {
        return $this->member_adress;
    }
    public function getCity()
    {
        return $this->member_city;
    }
    public function getZipCode()
    {
        return $this->member_zipcode;
    }
    public function getProvince()
    {
        return $this->member_province;
    }
}