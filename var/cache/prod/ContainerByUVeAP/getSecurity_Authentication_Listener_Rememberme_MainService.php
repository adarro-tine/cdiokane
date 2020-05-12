<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.rememberme.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Firewall/RememberMeListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

return $this->privates['security.authentication.listener.rememberme.main'] = new \Symfony\Component\Security\Http\Firewall\RememberMeListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, ($this->privates['security.authentication.session_strategy'] ?? ($this->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))));
