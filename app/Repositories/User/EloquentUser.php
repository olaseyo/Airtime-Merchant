<?php
namespace App\Repositories\User;
use App\Repositories\User\UserRepository as UserInterface;
use Illuminate\Database\Eloquent\Model;
class EloquentUser implements UserInterface{

        public $model;

        function __construct(Model $model){

            $this->model=$model;

        }

    public function paginate($perPage = 15, $columns = array('*')) {

        return $this->model->paginate($perPage, $columns);

    }

    public function getAll(){

        return $this->model->all();

    }

    public function getByTwoAttributes($key=array(),$value=array()){
		//var_dump($key);
		//var_dump($value);
        return $this->model->where($key[0], '=', $value[0])
		->orWhere($key[1], '=', $value[1])->get();
	}
	
	
	 public function getByAttribute($attribute, $value, $columns = array('*')){
        return $this->model->where($attribute, '=', $value)->first($columns);

    }
	
	    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }



    public function getById($id,$columns = array('*')){

        return $this->model->find($id,$columns);

    }

    public function create(array $attributes){

        return $this->model->create($attributes);

    }

    public function update($id,array $attributes){
        $user=$this->model->findOrFail($id);
        $user->update($attributes);
        return $user;
    } 
	public function updateByAttribute($key,$value,array $attributes){
        //$user=$this->model->findOrFail($id);
        //$user->update($attributes);
		$user=$this->model->where($key,$value)->update($attributes);
        return $user;
    }

    public function delete($id){
        return $this->model->getById($id)->delete();
    }

	public function createToken(){
		$charsetA=array('A','b','C','D','E','f','G','H','I','J'); //9
    $charsetB=array('h','i','j','k','l'); //4
    $charsetC=array('1','2','3','4','5','6','7','8','9'); //8
    $charsetD=array('m','n','O','p','Q','r','s','T','u'); //8
    $charsetE=array('o','j','k','l','w','X','Y','Z');  //7

    $arragmentchoice=rand(1, 5);
    $rand="";
    switch($arragmentchoice)
    {
      case 1:
         //ACBDE
         $rand=$charsetA[rand(0, 9)];
         $rand.=$charsetC[rand(0, 8)];
         $rand.=$charsetB[rand(0, 4)];
         $rand.=$charsetD[rand(0, 8)];
         $rand.=$charsetE[rand(0, 7)];

         break;
      case 2:
         //BDCEA
         $rand=$charsetB[rand(0, 4)];
         $rand.=$charsetD[rand(0, 8)];
         $rand.=$charsetC[rand(0, 8)];
         $rand.=$charsetE[rand(0, 7)];
         $rand.=$charsetA[rand(0, 9)];

         break;

      case 3:
         //CEDBA
         $rand=$charsetC[rand(0, 8)];
         $rand.=$charsetE[rand(0, 7)];
         $rand.=$charsetD[rand(0, 8)];
         $rand.=$charsetB[rand(0, 4)];
         $rand.=$charsetA[rand(0, 9)];
         break;
      case 4:
         //DBADC
         $rand=$charsetD[rand(0, 8)];
         $rand.=$charsetB[rand(0, 4)];
         $rand.=$charsetA[rand(0, 9)];
         $rand.=$charsetE[rand(0, 7)];
         $rand.=$charsetC[rand(0, 8)];
         break;
      case 5:
         //EBADC
         $rand=$charsetE[rand(0, 7)];
         $rand.=$charsetB[rand(0, 4)];
         $rand.=$charsetA[rand(0, 9)];
         $rand.=$charsetD[rand(0, 8)];
         $rand.=$charsetC[rand(0, 8)];
         break;
    }
		 return $rand;
	}

   
   

	
	
	function aes128Encrypt($key, $data) {
        if(16 !== strlen($key)) $key = hash('MD5', $key, true);
        $padding = 16 - (strlen($data) % 16);
        $data .= str_repeat(chr($padding), $padding);
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16)));
    }

    function aes128Decrypt($key, $data) {
        $data = base64_decode($data);
        if(16 !== strlen($key)) $key = hash('MD5', $key, true);
        $data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, str_repeat("\0", 16));
        $padding = ord($data[strlen($data) - 1]);
        return substr($data, 0, -$padding);
    }


	}
