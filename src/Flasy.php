<?php


namespace InstantechFlashy;

class Flasy
{

    const ERROR = 'ERROR';
    const SUCCESS = 'SUCCESS';

    /**
     * Permet d'ajouter un message d'erreur en passant le type d'erreur et la clé
     * @param $type
     * @param $message
     * @param string $key
     * @return string
     */
    public static function addFlash($key, $message, $type  = Flasy::ERROR){
            $_SESSION[$type][$key] = $message;
        return self::class;
    }

    /**
     * Renvoie un message d'erreur à travers le type du message et ou sa clé
     * @param $type
     * @param string $key
     * @return mixed|null
     */
    public static function getFlash($key, $type = Flasy::ERROR){
         $message = self::hasInFlash($key,$type) ?  $_SESSION[$type][$key] : null;
         unset($_SESSION[$type][$key]);
         return $message;
    }

    /**
     * Verifie si un message d'erreur existe déjà à travers la clé du message et le ou le type du message
     * @param $type
     * @param string $key
     * @return bool
     */
    public static function hasInFlash($key, $type = Flasy::ERROR){
        return isset($_SESSION[$type][$key]);
    }

    /**
     * Renvoie la liste de tous les messages d'erreur
     * @return array
     */
    public static function getAllErrorFlashy(){
        $allErrorMessage = isset($_SESSION[Flasy::ERROR]) ? $_SESSION[Flasy::ERROR] : array();
        unset($_SESSION[Flasy::ERROR]);
        return $allErrorMessage;
    }

    /**
     * Renvoie la liste de tous les messages de succès
     * @return array
     */
    public static function getAllSuccesFlashy(){
        $allSuccessMessage =  isset($_SESSION[Flasy::SUCCESS]) ? $_SESSION[Flasy::SUCCESS] : array();
        unset($_SESSION[Flasy::SUCCESS]);
        return $allSuccessMessage;
    }

    /**
     * Verifie si l'on a des messages de type ERROR
     * @return bool
     */
    public static function hasFlashyErrors(){
        return isset($_SESSION[Flasy::ERROR]);
    }

    /**
     * Verifie si l'on a des messages de type SUCCESS
     * @return bool
     */
    public static function hasFlashySuccess(){
        return isset($_SESSION[Flasy::SUCCESS]);
    }
}