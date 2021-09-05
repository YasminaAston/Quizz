<?php

namespace App\AppBundle\EventListener;

use App\Entity\User;
use App\Repository\UserRepository;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationFailureEvent;
use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationFailureResponse;

class AuthenticationSuccessListener
{

    protected UserRepository $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {

        $user = $this-> userRepository ->findOneBy(array('email' => $event->getUser()->getUsername()));
        $newUser = new User();
        $newUser->setEmail($user->getEmail());
        $newUser->setFirstname($user->getFirstname());
        $newUser->setLastname($user->getLastname());
        $newUser->setId($user->getId());
        $newUser->setImage($user->getImage());
        $newUser->setRole($user->getRole());
        $event->getUser($newUser);

        $data['statusCode'] = $event->getResponse()->getStatusCode();
        $data['token'] = $event->getData()['token'];
        $data['user'] = array('id' => $user->getId(), 'email' => $user->getEmail(), 'firstname'=> $user->getFirstname()
        , 'lastname'=> $user->getLastname(), 'image'=> $user->getImage(), 'role'=> $user->getRole());

        $event->setData($data);

    }


    /**
     * @param AuthenticationFailureEvent $event
     */
    public function onAuthenticationFailureResponse(AuthenticationFailureEvent $event)
    {
        $response = new JWTAuthenticationFailureResponse('Authentication failed', 401);
        $event->setResponse($response);
    }
}
