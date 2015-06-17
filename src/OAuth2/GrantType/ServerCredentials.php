<?php
/**
 * Created by PhpStorm.
 * User: stafox
 * Date: 17.06.15
 * Time: 8:56
 */

namespace OAuth2\GrantType;

use OAuth2\ResponseType\AccessTokenInterface;

class ServerCredentials extends ClientCredentials
{
    public function createAccessToken(AccessTokenInterface $accessToken, $client_id, $user_id, $scope, $includeRefreshToken = true)
    {
        if(isset($this->config['access_lifetime'])) {
            $accessToken->setAccessTokenLifetime($this->config['access_lifetime']);
        }

        return $accessToken->createAccessToken($client_id, $user_id, $scope, $includeRefreshToken);
    }
}