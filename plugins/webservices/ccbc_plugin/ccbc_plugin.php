<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Webservices.Ccbc_plugin
 *
 * @copyright   Copyright (C) 2025 All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Event\SubscriberInterface;
use Joomla\CMS\Event\Application\BeforeApiRouteEvent;
use Joomla\Router\Route;

/**
 * Web Services adapter for ccbc_plugin.
 *
 * @since  1.0.0
 */
class PlgWebservicesCcbc_plugin extends CMSPlugin implements SubscriberInterface
{
    /**
     * Returns an array of events this subscriber will listen to.
     *
     * @return  array
     *
     * @since   1.0.0
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onBeforeApiRoute' => 'onBeforeApiRoute',
        ];
    }

    /**
     * Registers ccbc_plugin's API routes in the application
     *
     * @param   \Joomla\Router\RouterInterface  &$router  The router
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function onBeforeApiRoute(&$router): void
    {
        // Create debug log directory if it doesn't exist
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        if (!is_dir(dirname($debugLog))) {
            mkdir(dirname($debugLog), 0755, true);
        }
        
        // Check if this is our API request
        $requestUri = $_SERVER['REQUEST_URI'] ?? '';
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " PLUGIN: onBeforeApiRoute triggered with intercept approach\n", FILE_APPEND);
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " REQUEST_URI: $requestUri\n", FILE_APPEND);
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " METHOD: $method\n", FILE_APPEND);
        
        // Check if this is our ccbc_plugin endpoint
        if (strpos($requestUri, '/api/index.php/v1/ccbc_plugin') !== false) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " INTERCEPT: This is our API endpoint, handling directly\n", FILE_APPEND);
            
            try {
                // Handle the request directly
                if ($method === 'GET') {
                    if (preg_match('/\/v1\/ccbc_plugin\/(\d+)/', $requestUri, $matches)) {
                        $this->handleGetItem($matches[1]);
                    } else {
                        $this->handleGet();
                    }
                } elseif ($method === 'POST') {
                    // Check if this is a login request
                    if (strpos($requestUri, '/v1/ccbc_plugin/login') !== false) {
                        $this->handleLogin();
                    } else {
                        $this->handlePost();
                    }
                } elseif (in_array($method, ['PUT', 'PATCH'])) {
                    if (preg_match('/\/v1\/ccbc_plugin\/(\d+)/', $requestUri, $matches)) {
                        $this->handleUpdate($matches[1]);
                    }
                } elseif ($method === 'DELETE') {
                    if (preg_match('/\/v1\/ccbc_plugin\/(\d+)/', $requestUri, $matches)) {
                        $this->handleDelete($matches[1]);
                    }
                }
                
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " INTERCEPT: Request handled, should have exited\n", FILE_APPEND);
                
            } catch (\Exception $e) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " INTERCEPT ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
                
                header('Content-Type: application/json');
                http_response_code(500);
                echo json_encode(['success' => false, 'error' => $e->getMessage()]);
                exit;
            }
        }
        
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " PLUGIN: Not our endpoint, continuing with normal routing\n", FILE_APPEND);
    }

    /**
     * Handle GET requests
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function handleGet()
    {   
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: GET request received\n", FILE_APPEND);
        
        try {
            $data = [
                'success' => true,
                'message' => 'GET request successful from CCBC Plugin Handler',
                'timestamp' => date('Y-m-d H:i:s'),
                'data' => [
                    'info' => 'This is a Joomla 5 CCBC API endpoint using plugin intercept',
                    'version' => '1.0.0',
                    'method' => 'GET'
                ]
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending GET response\n", FILE_APPEND);
            
            // Set headers and output JSON
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Handle POST requests
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function handlePost()
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: POST request received\n", FILE_APPEND);
        
        try {
            // Get POST data
            $input = file_get_contents('php://input');
            $postData = json_decode($input, true) ?: [];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: POST data " . json_encode($postData) . "\n", FILE_APPEND);
            
            $data = [
                'success' => true,
                'message' => 'POST request successful from CCBC Plugin Handler',
                'timestamp' => date('Y-m-d H:i:s'),
                'received' => $postData,
                'method' => 'POST'
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending POST response\n", FILE_APPEND);
            
            // Set headers and output JSON
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Handle GET requests for specific item
     *
     * @param   string  $id  The item ID
     * @return  void
     *
     * @since   1.0.0
     */
    public function handleGetItem($id = null)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: GET item request received for ID: $id\n", FILE_APPEND);

        try {
            $data = [
                'success' => true,
                'message' => 'GET item request successful from CCBC Plugin Handler',
                'timestamp' => date('Y-m-d H:i:s'),
                'data' => [
                    'id' => $id,
                    'info' => 'This is a specific item from Joomla 5 CCBC API endpoint',
                    'method' => 'GET_ITEM'
                ]
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending GET item response for ID: $id\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Handle PUT/PATCH requests (update)
     *
     * @param   string  $id  The item ID
     * @return  void
     *
     * @since   1.0.0
     */
    public function handleUpdate($id = null)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: UPDATE request received for ID: $id\n", FILE_APPEND);
        
        try {
            $input = file_get_contents('php://input');
            $updateData = json_decode($input, true) ?: [];
            
            $data = [
                'success' => true,
                'message' => 'UPDATE request successful from CCBC Plugin Handler',
                'timestamp' => date('Y-m-d H:i:s'),
                'id' => $id,
                'updated' => $updateData,
                'method' => 'UPDATE'
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending UPDATE response for ID: $id\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Handle DELETE requests
     *
     * @param   string  $id  The item ID
     * @return  void
     *
     * @since   1.0.0
     */
    public function handleDelete($id = null)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: DELETE request received for ID: $id\n", FILE_APPEND);
        
        try {
            $data = [
                'success' => true,
                'message' => 'DELETE request successful from CCBC Plugin Handler',
                'timestamp' => date('Y-m-d H:i:s'),
                'deleted_id' => $id,
                'method' => 'DELETE'
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending DELETE response for ID: $id\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Handle login requests to get JWT token
     *
     * @return  void
     *
     * @since   1.0.0
     */
    public function handleLogin()
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: LOGIN request received\n", FILE_APPEND);
        
        try {
            // Get POST data
            $input = file_get_contents('php://input');
            $loginData = json_decode($input, true) ?: [];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: LOGIN data received\n", FILE_APPEND);
            
            // Validate required fields
            if (empty($loginData['username']) || empty($loginData['password'])) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Missing username or password\n", FILE_APPEND);
                
                header('Content-Type: application/json');
                http_response_code(400);
                echo json_encode([
                    'success' => false, 
                    'error' => 'Username and password are required'
                ]);
                exit;
            }
            
            $username = $loginData['username'];
            $password = $loginData['password'];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Attempting login for user: $username\n", FILE_APPEND);
            
            // Load Joomla framework
            \JLoader::import('joomla.application.component.helper');
            
            // Get the application
            $app = \Joomla\CMS\Factory::getApplication();

            // Check if the username is number then update as string
            if (is_numeric($username)) {
                $username = (string) $username;
            }

            // Get authentication credentials
            $credentials = [
                'username' => $username,
                'password' => $password
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Attempting Joomla authentication\n", FILE_APPEND);

            // Authenticate user
            $authenticate = \Joomla\CMS\Authentication\Authentication::getInstance();
            $response = $authenticate->authenticate($credentials);
            
            if ($response->status !== \Joomla\CMS\Authentication\Authentication::STATUS_SUCCESS) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Authentication failed - " . $response->error_message . "\n", FILE_APPEND);
                
                header('Content-Type: application/json');
                http_response_code(401);
                echo json_encode([
                    'success' => false,
                    'error' => 'Invalid username or password'
                ]);
                exit;
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Authentication successful\n", FILE_APPEND);
            
            // Get user object
            $user = \Joomla\CMS\User\User::getInstance($response->username);

            if (!$user || !$user->id) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: User not found after authentication\n", FILE_APPEND);
                
                header('Content-Type: application/json');
                http_response_code(401);
                echo json_encode([
                    'success' => false,
                    'error' => 'User not found'
                ]);
                exit;
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: User found, ID: " . $user->id . "\n", FILE_APPEND);
            
            // Get custom field values for the user
            $customFields = $this->getUserCustomFields($user);
            
            // Refresh and get JWT token
            $this->refreshJwtSecret();
            $token = $this->generateJwtToken($user);
            
            if (!$token) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Failed to generate JWT token\n", FILE_APPEND);
                
                header('Content-Type: application/json');
                http_response_code(500);
                echo json_encode([
                    'success' => false,
                    'error' => 'Failed to generate token'
                ]);
                exit;
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: JWT token generated successfully\n", FILE_APPEND);
            
            // Prepare user data with custom fields
            $userData = [
                'id' => $user->id,
                'username' => $user->username,
                'name' => $user->name,
                'email' => $user->email
            ];
            
            // Add custom fields to user data
            if (!empty($customFields)) {
                $userData['custom_fields'] = $customFields;
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Added " . count($customFields) . " custom fields to user data\n", FILE_APPEND);
            }
            
            $data = [
                'success' => true,
                'message' => 'Login successful',
                'timestamp' => date('Y-m-d H:i:s'),
                'user' => $userData,
                'token' => $token,
                'expires_in' => 3600 * 731 // 731 hours
            ];
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER: Sending successful login response\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
            
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " HANDLER ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            
            header('Content-Type: application/json');
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }

    /**
     * Refresh JWT secret in database
     *
     * @return  void
     *
     * @since   1.0.0
     */
    private function refreshJwtSecret()
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        
        try {
            // Generate new secret
            $newSecret = bin2hex(random_bytes(32));
            
            // Get database
            $db = \Joomla\CMS\Factory::getDbo();
            
            // Update or insert JWT secret
            $query = $db->getQuery(true);
            
            // Check if jwt_secret extension exists
            $query->select('extension_id')
                  ->from($db->quoteName('#__extensions'))
                  ->where($db->quoteName('type') . ' = ' . $db->quote('plugin'))
                  ->where($db->quoteName('element') . ' = ' . $db->quote('jwtauth'))
                  ->where($db->quoteName('folder') . ' = ' . $db->quote('api-authentication'));
            
            $db->setQuery($query);
            $extensionId = $db->loadResult();
            
            if ($extensionId) {
                // Update existing
                $query = $db->getQuery(true);
                $query->update($db->quoteName('#__extensions'))
                      ->set($db->quoteName('params') . ' = ' . $db->quote('{"secret":"' . $newSecret . '"}'))
                      ->where($db->quoteName('extension_id') . ' = ' . (int) $extensionId);
                
                $db->setQuery($query);
                $db->execute();
                
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Secret refreshed for existing extension\n", FILE_APPEND);
            } else {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: No JWT auth plugin found, using fallback\n", FILE_APPEND);
            }
            
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    /**
     * Generate JWT token for user
     *
     * @param   \Joomla\CMS\User\User  $user  The user object
     * @return  string|false  JWT token or false on failure
     *
     * @since   1.0.0
     */
    private function generateJwtToken($user)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        
        try {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Generating Joomla-compatible token for user " . $user->id . "\n", FILE_APPEND);
            
            // Get Joomla's site secret
            $app = \Joomla\CMS\Factory::getApplication();
            $siteSecret = $app->get('secret');
            
            if (empty($siteSecret)) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT ERROR: Site secret is empty\n", FILE_APPEND);
                return false;
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Site secret found\n", FILE_APPEND);
            
            // Get or create user token seed (always refresh for login)
            $tokenSeed = $this->getOrCreateTokenSeed($user->id, true);
            
            if (!$tokenSeed) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT ERROR: Failed to get token seed\n", FILE_APPEND);
                return false;
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Token seed obtained\n", FILE_APPEND);
            
            // Algorithm to use
            $algorithm = 'sha256';
            
            // Create token data
            $tokenData = base64_decode($tokenSeed);
            
            // Generate HMAC
            $hmac = hash_hmac($algorithm, $tokenData, $siteSecret);
            
            // Create Joomla token format: algorithm:userId:hmac
            $tokenString = $algorithm . ':' . $user->id . ':' . $hmac;
            
            // Base64 encode the final token
            $token = base64_encode($tokenString);
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Joomla-compatible token generated\n", FILE_APPEND);
            
            return $token;
            
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            return false;
        }
    }

    /**
     * Get or create token seed for user
     *
     * @param   int   $userId  The user ID
     * @param   bool  $refresh Whether to force refresh the token seed
     * @return  string|false  Token seed or false on failure
     *
     * @since   1.0.0
     */
    private function getOrCreateTokenSeed($userId, $refresh = false)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        
        try {
            // Get database
            $db = \Joomla\CMS\Factory::getDbo();
            
            if (!$refresh) {
                // Check if user already has a token seed
                $query = $db->getQuery(true);
                $query->select($db->quoteName('profile_value'))
                      ->from($db->quoteName('#__user_profiles'))
                      ->where($db->quoteName('user_id') . ' = ' . (int) $userId)
                      ->where($db->quoteName('profile_key') . ' = ' . $db->quote('joomlatoken.token'));
                
                $db->setQuery($query);
                $existingSeed = $db->loadResult();
                
                if ($existingSeed) {
                    file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Using existing token seed for user $userId\n", FILE_APPEND);
                    return $existingSeed;
                }
            } else {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Refreshing token seed for user $userId\n", FILE_APPEND);
                
                // Delete existing token seed if refreshing
                $query = $db->getQuery(true);
                $query->delete($db->quoteName('#__user_profiles'))
                      ->where($db->quoteName('user_id') . ' = ' . (int) $userId)
                      ->where($db->quoteName('profile_key') . ' = ' . $db->quote('joomlatoken.token'));
                
                $db->setQuery($query);
                $db->execute();
                
                // Also delete enabled flag to recreate it
                $query = $db->getQuery(true);
                $query->delete($db->quoteName('#__user_profiles'))
                      ->where($db->quoteName('user_id') . ' = ' . (int) $userId)
                      ->where($db->quoteName('profile_key') . ' = ' . $db->quote('joomlatoken.enabled'));
                
                $db->setQuery($query);
                $db->execute();
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Creating new token seed for user $userId\n", FILE_APPEND);
            
            // Generate new token seed
            $seed = random_bytes(32);
            $encodedSeed = base64_encode($seed);
            
            // Insert token seed
            $query = $db->getQuery(true);
            $query->insert($db->quoteName('#__user_profiles'))
                  ->columns($db->quoteName(['user_id', 'profile_key', 'profile_value', 'ordering']))
                  ->values((int) $userId . ', ' . $db->quote('joomlatoken.token') . ', ' . $db->quote($encodedSeed) . ', 1');
            
            $db->setQuery($query);
            $db->execute();
            
            // Also need to enable the token
            $query = $db->getQuery(true);
            $query->insert($db->quoteName('#__user_profiles'))
                  ->columns($db->quoteName(['user_id', 'profile_key', 'profile_value', 'ordering']))
                  ->values((int) $userId . ', ' . $db->quote('joomlatoken.enabled') . ', ' . $db->quote('1') . ', 2');
            
            $db->setQuery($query);
            $db->execute();
            
            if ($refresh) {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Token seed refreshed and enabled for user $userId\n", FILE_APPEND);
            } else {
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT: Token seed created and enabled for user $userId\n", FILE_APPEND);
            }
            
            return $encodedSeed;
            
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " JWT ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            return false;
        }
    }

    /**
     * Get custom field values for a user
     *
     * @param   \Joomla\CMS\User\User  $user  The user object
     * @return  array  Custom field values
     *
     * @since   1.0.0
     */
    private function getUserCustomFields($user)
    {
        $debugLog = JPATH_SITE . '/tmp/ccbc_plugin_debug.log';
        
        try {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " CUSTOM_FIELDS: Getting custom fields for user " . $user->id . "\n", FILE_APPEND);
            
            // Load FieldsHelper
            \JLoader::import('joomla.application.component.helper');
            require_once JPATH_ADMINISTRATOR . '/components/com_fields/src/Helper/FieldsHelper.php';
            
            // Get custom fields for the user context
            $fields = \Joomla\Component\Fields\Administrator\Helper\FieldsHelper::getFields('com_users.user', $user, true);
            
            $customFields = [];
            
            foreach ($fields as $field) {
                // Only return key and value as requested
                $customFields[$field->name] = $field->value ?? $field->rawvalue ?? $field->default_value ?? '';
                
                file_put_contents($debugLog, date('Y-m-d H:i:s') . " CUSTOM_FIELDS: Field " . $field->name . " = " . ($field->value ?? 'NULL') . "\n", FILE_APPEND);
            }
            
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " CUSTOM_FIELDS: Retrieved " . count($customFields) . " custom fields\n", FILE_APPEND);
            
            return $customFields;
            
        } catch (\Exception $e) {
            file_put_contents($debugLog, date('Y-m-d H:i:s') . " CUSTOM_FIELDS ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
            return [];
        }
    }

    /**
     * Generate fallback token when JWT library is not available
     *
     * @param   \Joomla\CMS\User\User  $user  The user object
     * @return  string  Simple token
     *
     * @since   1.0.0
     */
    private function generateFallbackToken($user)
    {
        // Create a simple token format
        $data = [
            'user_id' => $user->id,
            'username' => $user->username,
            'issued' => time(),
            'expires' => time() + 3600 * 731
        ];
        
        // Encode and sign
        $encoded = base64_encode(json_encode($data));
        $signature = hash_hmac('sha256', $encoded, 'ccbc_fallback_secret');
        
        return $encoded . '.' . $signature;
    }
}
