<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQDBcZ+Q9wQAKUaK'."\n".'+sX+fjmUfLl3qjiulDt36A1zMr2Ju/HKGPP3XY+Ug9VGTPd6NdFpPqWivmoNhxFI'."\n".'zHP2VCdK4OqV2M7y281gvyD25PVxunMAbY1yxdag0wl0dzlDmVXg04NBTtQCNNoX'."\n".'0ihDHKPLcBdjmK9CXDsjQGkQgCW1gNjWmFhUc98y2YX5IMQP2emt5xphOdC5V4+E'."\n".'5rThJ93+3ycTZGC8/zlAu9wGnqWYw3BVzeZX9BS4rmM+c+Hyf+dbNx/Euehf52qU'."\n".'aEMSLFjq6k4CCKE/c5Iik+lUGXLVO15fA8K5EcF572DxaciVRqFCcoUEjXgs2Z9j'."\n".'pqzQZvJ9AgMBAAECggEBAIvJzxRT3Jk9OpPuGiwJDRUHeINICAPobHz+vNF1ZlBk'."\n".'95oipBIqkzowdmuB7QhsYbLbKZjMXxj9dPkVfesQ7wAGPp8geJQ5UFXMaEbiN5gC'."\n".'s14ozKGW471+I4P9L+1wngWE84G7NCuQA9ZY8O1mgdreWpiHWobq3XVg80uQPy/D'."\n".'9c2NrM0cHA+Ya5/rnUH7oG7yeljRsn+LGxkDIRLk0rTItjWvzxW3HytlHZsX2LZJ'."\n".'PPG4GKf23Aej3gDGqKCXl6e5iV3ISu6TBJgD5Nq9ijD8ovYWqcFbSrgl/fFEFxXZ'."\n".'eDJ0O8G3Fyiq7Ohh9IRFwpFd7zjJ9rIrY1Vnk3I6EUUCgYEA33AC8FRzMBD2r3EQ'."\n".'MJ2CII6nubWpwjbDsgWgHgJAsitR0LaRL7D6ZEFTo6Pb2cHuVd77SEgx2ZbGTKKZ'."\n".'v4mL1DBQhnTtfkzN+iGq1yBgyirWuuIs2FnInDhqRiHx0I66QIOUkQrzB+weGREV'."\n".'/zJPAdSrKItlBGO2SFYBRGiR9c8CgYEA3aKb/P5Wl9YPbUzny7cChanZ2XzBjwfI'."\n".'VUhoksi1YLHJdoX1+5ViAI7XTb3qyvDvmvsJPltEAFbdcl/0khTMket+NP0r662V'."\n".'gBuZrlpxobtMhaqLaTKdeTI4Q6sN80stWNe1JrJIeOqELF8PeOWtONj71FTTlqJl'."\n".'b59c+ubSMfMCgYEAz0ABqdRbZ8lEV+WCw+VFj1djIjHr/XZ4vMbVByDFy728zOCa'."\n".'+OaqypWBtDbINUrZ/JKw+BHnE1H0K59jBzPZHH+YIa+RnuY05H+YDKU+widMN9qV'."\n".'CDT3jFgT02um9fF9t1uVUZgbZ0zPeibMBYMvn54ZCKmLkK/Ao4YK9N4eDScCgYEA'."\n".'yM2YCIqjB+QQjBW+eUpxRYrS7oJil+UUM3hsDnk8I8RQZEsQx4Tbiuff1/a2sHHE'."\n".'lKTXBiEIJkqNTh/z5RplEdvLt9SdI2Vc6vmWrmoRQ9f/h6cxsfkCxZijc2OaOxCk'."\n".'oDanUMz8blkDsXPa/80PuU6WMxU7suGlh5FaW5QfYtMCgYEAlG95zR9b3VUWDnUC'."\n".'HRQieEt+/G/2HbFjLYUrPgEbc257pCAM/H6zXb/jKZK96RLIJH8hJ2GNVKYLRla5'."\n".'AOipZIfAF6IxW9867Jxtzr10+Mxj0aBOfh0OXhi6pCkpIbvP3QzpmokEFs+7/QsC'."\n".'it+uVgbo2zY30GGH2GFijrCrAtg='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000e1cd01bb1cb98fa5814f8d0323101f9b6cabb87073772a8fe35ed66ffacd13d3d1c994b90718e56cd45a605e99a06aa0e4c523a31641369650342ce79ea70320');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
