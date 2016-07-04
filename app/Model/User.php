<?php
App::uses('AppModel','Model');

class User extends AppModel {
    var $name = 'User';
    var $useTable = 'users';
    public $validate = array(
        'email' => array(
            // メールアドレスであること。
            'validEmail' => array( 'rule' => array( 'email', true), 'message' => 'アドレスを入力して下さい'),
            // 一意性チェック
            'emailExists' => array( 'rule' => 'isUnique', 'message' => '既に登録されています'),
        ),
        'password' => array(
             // パスワード・確認用パスワードの一致
             'match' => array( 'rule' => array( 'confirmPassword', 'password_confirm'), 'message' => 'パスワードが一致しません'),
        )
    );

    public function confirmPassword( $field, $password_confirm) {
        if ($field['password'] === $this->data[$this->name][$password_confirm]) {
            // パスワードハッシュ化
            $salt = createSalt();
            $encrypted_password = crypt($password, $salt);
            
            // $this->data[$this->name]['password'] = crypt($password, $salt); Security::hash( $plain, 'sha512', true);
            return true;
        }
    }

}
