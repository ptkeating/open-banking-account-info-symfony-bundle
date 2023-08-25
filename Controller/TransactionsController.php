<?php

/**
 * TransactionsController
 * PHP version 8.1.1
 *
 * @category Class
 * @package  OpenAPI\Server\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Account and Transaction API Specification
 *
 * Swagger for Account and Transaction API Specification
 *
 * The version of the OpenAPI document: 3.1.11
 * Contact: ServiceDesk@openbanking.org.uk
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use OpenAPI\Server\Api\TransactionsApiInterface;
use OpenAPI\Server\Model\OBErrorResponse1;
use OpenAPI\Server\Model\OBReadTransaction6;

/**
 * TransactionsController Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class TransactionsController extends Controller
{

    /**
     * Operation getAccountsAccountIdStatementsStatementIdTransactions
     *
     * Get Transactions
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getAccountsAccountIdStatementsStatementIdTransactionsAction(Request $request, $statementId, $accountId)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json; charset=utf-8', 'application/json', 'application/jose+jwe'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'PSUOAuth2Security' required
        // Oauth required
        $securityPSUOAuth2Security = $request->headers->get('authorization');

        // Read out all input parameter values into variables
        $xFapiAuthDate = $request->headers->get('x-fapi-auth-date');
        $xFapiCustomerIpAddress = $request->headers->get('x-fapi-customer-ip-address');
        $xFapiInteractionId = $request->headers->get('x-fapi-interaction-id');
        $authorization = $request->headers->get('Authorization');
        $xCustomerUserAgent = $request->headers->get('x-customer-user-agent');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $statementId = $this->deserialize($statementId, 'string', 'string');
            $accountId = $this->deserialize($accountId, 'string', 'string');
            $authorization = $this->deserialize($authorization, 'string', 'string');
            $xFapiAuthDate = $this->deserialize($xFapiAuthDate, 'string', 'string');
            $xFapiCustomerIpAddress = $this->deserialize($xFapiCustomerIpAddress, 'string', 'string');
            $xFapiInteractionId = $this->deserialize($xFapiInteractionId, 'string', 'string');
            $xCustomerUserAgent = $this->deserialize($xCustomerUserAgent, 'string', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($statementId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($accountId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($authorization, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $asserts[] = new Assert\Regex("/^(Mon|Tue|Wed|Thu|Fri|Sat|Sun), \\d{2} (Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec) \\d{4} \\d{2}:\\d{2}:\\d{2} (GMT|UTC)$/");
        $response = $this->validate($xFapiAuthDate, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiCustomerIpAddress, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiInteractionId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xCustomerUserAgent, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'PSUOAuth2Security'
            $handler->setPSUOAuth2Security($securityPSUOAuth2Security);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];

            $result = $handler->getAccountsAccountIdStatementsStatementIdTransactions($statementId, $accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Transactions Read';
                    break;
                case 400:
                    $message = 'Bad request';
                    break;
                case 401:
                    $message = 'Unauthorized';
                    break;
                case 403:
                    $message = 'Forbidden';
                    break;
                case 404:
                    $message = 'Not found';
                    break;
                case 405:
                    $message = 'Method Not Allowed';
                    break;
                case 406:
                    $message = 'Not Acceptable';
                    break;
                case 429:
                    $message = 'Too Many Requests';
                    break;
                case 500:
                    $message = 'Internal Server Error';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (\Throwable $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getAccountsAccountIdTransactions
     *
     * Get Transactions
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getAccountsAccountIdTransactionsAction(Request $request, $accountId)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json; charset=utf-8', 'application/json', 'application/jose+jwe'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'PSUOAuth2Security' required
        // Oauth required
        $securityPSUOAuth2Security = $request->headers->get('authorization');

        // Read out all input parameter values into variables
        $fromBookingDateTime = $request->query->get('fromBookingDateTime');
        $toBookingDateTime = $request->query->get('toBookingDateTime');
        $xFapiAuthDate = $request->headers->get('x-fapi-auth-date');
        $xFapiCustomerIpAddress = $request->headers->get('x-fapi-customer-ip-address');
        $xFapiInteractionId = $request->headers->get('x-fapi-interaction-id');
        $authorization = $request->headers->get('Authorization');
        $xCustomerUserAgent = $request->headers->get('x-customer-user-agent');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $accountId = $this->deserialize($accountId, 'string', 'string');
            $authorization = $this->deserialize($authorization, 'string', 'string');
            $xFapiAuthDate = $this->deserialize($xFapiAuthDate, 'string', 'string');
            $xFapiCustomerIpAddress = $this->deserialize($xFapiCustomerIpAddress, 'string', 'string');
            $xFapiInteractionId = $this->deserialize($xFapiInteractionId, 'string', 'string');
            $xCustomerUserAgent = $this->deserialize($xCustomerUserAgent, 'string', 'string');
            $fromBookingDateTime = $this->deserialize($fromBookingDateTime, '\DateTime', 'string');
            $toBookingDateTime = $this->deserialize($toBookingDateTime, '\DateTime', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($accountId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($authorization, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $asserts[] = new Assert\Regex("/^(Mon|Tue|Wed|Thu|Fri|Sat|Sun), \\d{2} (Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec) \\d{4} \\d{2}:\\d{2}:\\d{2} (GMT|UTC)$/");
        $response = $this->validate($xFapiAuthDate, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiCustomerIpAddress, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiInteractionId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xCustomerUserAgent, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("DateTime");
        $response = $this->validate($fromBookingDateTime, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("DateTime");
        $response = $this->validate($toBookingDateTime, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'PSUOAuth2Security'
            $handler->setPSUOAuth2Security($securityPSUOAuth2Security);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];

            $result = $handler->getAccountsAccountIdTransactions($accountId, $authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $fromBookingDateTime, $toBookingDateTime, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Transactions Read';
                    break;
                case 400:
                    $message = 'Bad request';
                    break;
                case 401:
                    $message = 'Unauthorized';
                    break;
                case 403:
                    $message = 'Forbidden';
                    break;
                case 405:
                    $message = 'Method Not Allowed';
                    break;
                case 406:
                    $message = 'Not Acceptable';
                    break;
                case 429:
                    $message = 'Too Many Requests';
                    break;
                case 500:
                    $message = 'Internal Server Error';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (\Throwable $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getTransactions
     *
     * Get Transactions
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getTransactionsAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json; charset=utf-8', 'application/json', 'application/jose+jwe'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication
        // Authentication 'PSUOAuth2Security' required
        // Oauth required
        $securityPSUOAuth2Security = $request->headers->get('authorization');

        // Read out all input parameter values into variables
        $fromBookingDateTime = $request->query->get('fromBookingDateTime');
        $toBookingDateTime = $request->query->get('toBookingDateTime');
        $xFapiAuthDate = $request->headers->get('x-fapi-auth-date');
        $xFapiCustomerIpAddress = $request->headers->get('x-fapi-customer-ip-address');
        $xFapiInteractionId = $request->headers->get('x-fapi-interaction-id');
        $authorization = $request->headers->get('Authorization');
        $xCustomerUserAgent = $request->headers->get('x-customer-user-agent');

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $authorization = $this->deserialize($authorization, 'string', 'string');
            $xFapiAuthDate = $this->deserialize($xFapiAuthDate, 'string', 'string');
            $xFapiCustomerIpAddress = $this->deserialize($xFapiCustomerIpAddress, 'string', 'string');
            $xFapiInteractionId = $this->deserialize($xFapiInteractionId, 'string', 'string');
            $xCustomerUserAgent = $this->deserialize($xCustomerUserAgent, 'string', 'string');
            $fromBookingDateTime = $this->deserialize($fromBookingDateTime, '\DateTime', 'string');
            $toBookingDateTime = $this->deserialize($toBookingDateTime, '\DateTime', 'string');
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($authorization, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $asserts[] = new Assert\Regex("/^(Mon|Tue|Wed|Thu|Fri|Sat|Sun), \\d{2} (Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec) \\d{4} \\d{2}:\\d{2}:\\d{2} (GMT|UTC)$/");
        $response = $this->validate($xFapiAuthDate, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiCustomerIpAddress, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xFapiInteractionId, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("string");
        $response = $this->validate($xCustomerUserAgent, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("DateTime");
        $response = $this->validate($fromBookingDateTime, $asserts);
        if ($response instanceof Response) {
            return $response;
        }
        $asserts = [];
        $asserts[] = new Assert\Type("DateTime");
        $response = $this->validate($toBookingDateTime, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            // Set authentication method 'PSUOAuth2Security'
            $handler->setPSUOAuth2Security($securityPSUOAuth2Security);

            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];

            $result = $handler->getTransactions($authorization, $xFapiAuthDate, $xFapiCustomerIpAddress, $xFapiInteractionId, $xCustomerUserAgent, $fromBookingDateTime, $toBookingDateTime, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Transactions Read';
                    break;
                case 400:
                    $message = 'Bad request';
                    break;
                case 401:
                    $message = 'Unauthorized';
                    break;
                case 403:
                    $message = 'Forbidden';
                    break;
                case 404:
                    $message = 'Not found';
                    break;
                case 405:
                    $message = 'Method Not Allowed';
                    break;
                case 406:
                    $message = 'Not Acceptable';
                    break;
                case 429:
                    $message = 'Too Many Requests';
                    break;
                case 500:
                    $message = 'Internal Server Error';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (\Throwable $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return TransactionsApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('transactions');
    }
}