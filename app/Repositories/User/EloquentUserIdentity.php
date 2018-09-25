<?php
namespace App\Repositories\User;
use App\Repositories\User\UserRepository as UserInterface;
use Illuminate\Database\Eloquent\Model;
class EloquentUserIdentity implements UserInterface{

        public $model;

        function __construct(Model $userIdentityDb){

            $this->model=$userIdentityDb;

        }

    public function paginate($perPage = 15, $columns = array('*')) {

        return $this->model->paginate($perPage, $columns);

    }

    public function getAll(){

        return $this->model->all();

    }

    public function getByAttribute($attribute, $value, $columns = array('*')){
        return $this->model->where($attribute, '=', $value)->first($columns);

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

    public function delete($id){
        return $this->model->getById($id)->delete();
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
