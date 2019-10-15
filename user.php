<?php
class User{
    var $userName;
    var $password;
    var $fullName;
    function User($userName, $password, $fullName)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->fullName = $password;
    }   
    /*
    * Xác thực người sử dụng
    * @param UserName string Tên đăng nhập
    * @param $password string mật khẩu
    * @return User hoặc null nếu không tồn tại
    */
    static function authetication($userName, $password)
    {
        if($userName == "baoxuan155@gmail.com" && $password == "123")
            return new User($fullName, $password, "xuan bao");
        else return null;
    }
}