<?php
/**
 * Controller
 *
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

use OpenAPI\Server\Api\ApiServer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\ConstraintViolation;
use OpenAPI\Server\Service\SerializerInterface;
use OpenAPI\Server\Service\ValidatorInterface;

/**
 * Controller Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class Controller extends AbstractController
{
    protected ValidatorInterface $validator;
    protected SerializerInterface $serializer;
    protected ApiServer $apiServer;

    public function setValidator(ValidatorInterface $validator): self
    {
        $this->validator = $validator;

        return $this;
    }

    public function setSerializer(SerializerInterface $serializer): self
    {
        $this->serializer = $serializer;

        return $this;
    }

    public function setApiServer(ApiServer $server): self
    {
        $this->apiServer = $server;

        return $this;
    }

    /**
     * This will return a response with code 400. Usage example:
     *     return $this->createBadRequestResponse('Unable to access this page!');
     *
     * @param string $message A message
     *
     * @return Response
     */
    public function createBadRequestResponse(string $message = 'Bad Request.'): Response
    {
        return new Response($message, 400);
    }

    /**
     * This will return an error response. Usage example:
     *     return $this->createErrorResponse(new UnauthorizedHttpException());
     *
     * @param HttpException $exception An HTTP exception
     *
     * @return Response
     */
    public function createErrorResponse(HttpException $exception): Response
    {
        $statusCode = $exception->getStatusCode();
        $headers    = array_merge($exception->getHeaders(), ['Content-Type' => 'application/json']);

        $json = $this->exceptionToArray($exception);
        $json['statusCode'] = $statusCode;

        return new Response(json_encode($json, 15, 512), $statusCode, $headers);
    }

    /**
     * Serializes data to a given type format.
     *
     * @param mixed  $data   The data to serialize.
     * @param string $format The target serialization format.
     *
     * @return string A serialized data string.
     */
    protected function serialize($data, string $format): string
    {
        return $this->serializer->serialize($data, $format);
    }

    /**
     * Deserializes data from a given type format.
     *
     * @param mixed  $data   The data to deserialize.
     * @param string $class  The target data class.
     * @param string $format The source serialization format.
     *
     * @return mixed A deserialized data.
     */
    protected function deserialize($data, string $class, string $format)
    {
        return $this->serializer->deserialize($data, $class, $format);
    }

    /**
     * @param mixed $data
     * @param mixed $asserts
     *
     * @return Response|null
     */
    protected function validate($data, $asserts = null): ?Response
    {
        $errors = $this->validator->validate($data, $asserts);

        if (count($errors) > 0) {
            $errorsString = '';
            /** @var ConstraintViolation $violation */
            foreach ($errors as $violation) {
                $errorsString .= $violation->getMessage()."\n";
            }
            return $this->createBadRequestResponse($errorsString);
        }

        return null;
    }

    /**
     * Converts an exception to a serializable array.
     *
     * @param \Throwable|null $exception
     *
     * @return array|null
     */
    private function exceptionToArray(\Throwable $exception = null): ?array
    {
        if (null === $exception) {
            return null;
        }

        if (!$this->container->get('kernel')->isDebug()) {
            return [
                'message'  => $exception->getMessage(),
            ];
        }

        return [
            'message'  => $exception->getMessage(),
            'type'     => get_class($exception),
            'previous' => $this->exceptionToArray($exception->getPrevious()),
        ];
    }

    /**
     * Converts an exception to a serializable array.
     *
     * @param string $accept
     * @param array $produced
     *
     * @return ?string
     */
    protected function getOutputFormat(string $accept, array $produced): ?string
    {
        // Figure out what the client accepts
        $accept = preg_split("/[\s,]+/", $accept);

        // Remove q-factor weighting. E.g. "application/json;q=0.8" becomes "application/json"
        $accept = array_map(function ($type) {return explode(';', $type)[0];}, $accept);

        if (in_array('*/*', $accept) || in_array('application/*', $accept)) {
            // Prefer JSON if the client has no preference
            if (in_array('application/json', $produced)) {
                return 'application/json';
            }
            if (in_array('application/xml', $produced)) {
                return 'application/xml';
            }
        }

        if (in_array('application/json', $accept) && in_array('application/json', $produced)) {
            return 'application/json';
        }

        if (in_array('application/xml', $accept) && in_array('application/xml', $produced)) {
            return 'application/xml';
        }

        // If we reach this point, we don't have a common ground between server and client
        return null;
    }

    /**
     * Checks whether Content-Type request header presented in supported formats.
     *
     * @param Request $request  Request instance.
     * @param array   $consumes Array of supported content types.
     *
     * @return bool Returns true if Content-Type supported otherwise false.
     */
    public static function isContentTypeAllowed(Request $request, array $consumes = []): bool
    {
        if (!empty($consumes) && $consumes[0] !== '*/*') {
            $currentFormat = $request->getContentType();
            foreach ($consumes as $mimeType) {
                // canonize mime type
                if (is_string($mimeType) && false !== $pos = strpos($mimeType, ';')) {
                    $mimeType = trim(substr($mimeType, 0, $pos));
                }

                if (!$format = $request->getFormat($mimeType)) {
                    // add custom format to request
                    $format = $mimeType;
                    $request->setFormat($format, $format);
                    $currentFormat = $request->getContentType();
                }

                if ($format === $currentFormat) {
                    return true;
                }
            }

            return false;
        }

        return true;
    }
}
