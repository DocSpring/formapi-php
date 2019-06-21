<?php
/**
 * PDFApiTest
 * PHP version 5
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API V1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace FormAPI;

use \FormAPI\Configuration;
use \FormAPI\ApiException;
use \FormAPI\ObjectSerializer;

/**
 * PDFApiTest Class Doc Comment
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PDFApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
      // Configure HTTP basic authorization: api_token_basic
      $config = \FormAPI\Configuration::getDefaultConfiguration()
                    ->setUsername('api_token123')
                    ->setPassword('testsecret123')
                    ->setHost('http://api.formapi.local:31337/api/v1');
      $this->apiInstance = new \FormAPI\Api\PDFApi(
          // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
          // This is optional, `GuzzleHttp\Client` will be used as default.
          new \GuzzleHttp\Client(),
          $config
      );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for batchGeneratePDF
     *
     * Generates multiple PDFs.
     *
     */
    public function testBatchGeneratePdfs()
    {
      $template_id = 'tpl_000000000000000001'; // string |

      $batchGenerateData = json_encode([
        "template_id" => $template_id,
        "submissions" => array(
          [
            'data' => [
              "title" => 'Test PDF',
              "description" => 'This PDF is great!',
            ]
          ],
          [
            'data' => [
              "title" => 'Test PDF 2',
              "description" => 'This PDF is also great!',
            ]
          ]
        )
      ]);
      $response = $this->apiInstance->batchGeneratePdfs($batchGenerateData);
      $this->assertEquals('success', $response->getStatus());

      $submissionResponses = $response->getSubmissions();
      $this->assertCount(2, $submissionResponses);

      $firstResponse = $submissionResponses[0];
      $this->assertEquals('success', $firstResponse->getStatus());
      $submission = $firstResponse->getSubmission();
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('pending', $submission->getState());
    }

    /**
     * Test case for combineSubmissions
     *
     * Merge generated PDFs together.
     *
     */
    public function testCombineSubmissions()
    {
      $combined_submission_data = new Model\CombinedSubmissionData(); // \FormAPI\Model\CombinedSubmissionData |
      $combined_submission_data->setSubmissionIds(
        array('sub_000000000000000001', 'sub_000000000000000002'));
      $result = $this->apiInstance->combineSubmissions($combined_submission_data);
      $this->assertEquals($result->getStatus(), 'success');
      $this->assertStringStartsWith('com_', $result->getCombinedSubmission()->getId());
    }

    /**
     * Test case for expireCombinedSubmission
     *
     * Expire a combined submission.
     *
     */
    public function testExpireCombinedSubmission()
    {
      $combined_submission_id = 'com_000000000000000001'; // string |
      $result = $this->apiInstance->expireCombinedSubmission($combined_submission_id);
      $this->assertEquals($result->getExpired(), True);
    }

    /**
     * Test case for expireSubmission
     *
     * Expire a PDF submission.
     *
     */
    public function testExpireSubmission()
    {
      $submission_id = 'sub_000000000000000001'; // string |
      $result = $this->apiInstance->expireSubmission($submission_id);
      $this->assertEquals($result->getExpired(), True);
    }

    /**
     * Test case for generatePDF
     *
     * Generates a new PDF.
     *
     */
    public function testGeneratePDF()
    {
      $template_id = 'tpl_000000000000000001'; // string |

      $submission = new Model\SubmissionData();
      $submission->setData([
        "title" => 'Test PDF',
        "description" => 'This PDF is great!',
      ]);
      $response = $this->apiInstance->generatePDF($template_id, $submission);

      $this->assertEquals('success', $response->getStatus());
      $submission = $response->getSubmission();
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('pending', $submission->getState());
    }

    /**
     * Test case for generatePDF with data_requests
     *
     * Generates a new PDF.
     *
     */
    public function testGeneratePDFWithDataRequests()
    {
      $template_id = 'tpl_000000000000000001'; // string |

      $submission = new Model\SubmissionData();
      $submission->setData([
        "title" => 'Test PDF',
      ]);
      $submission->setDataRequests(array(
        [
          "name" => 'John Smith',
          "email" => 'jsmith@example.com',
          "fields" => array('description'),
          "order" => 1,
          "auth_type" => 'email_link'
        ]
      ));
      $response = $this->apiInstance->generatePDF($template_id, $submission);

      $this->assertEquals('success', $response->getStatus());
      $submission = $response->getSubmission();
      $this->assertStringStartsWith('sub_', $submission->getId());
      $this->assertEquals(False, $submission->getExpired());
      $this->assertEquals('waiting_for_data_requests', $submission->getState());

      $data_requests = $submission->getDataRequests();
      $this->assertCount(1, $data_requests);
      $data_request = $data_requests[0];

      $this->assertStringStartsWith('drq_', $data_request->getId());
      $this->assertEquals('pending', $data_request->getState());
      $this->assertEquals(array('description'), $data_request->getFields());
      $this->assertEquals(1, $data_request->getOrder());
      $this->assertEquals('John Smith', $data_request->getName());
      $this->assertEquals('jsmith@example.com', $data_request->getEmail());
    }

    /**
     * Test case for getCombinedSubmission
     *
     * Check the status of a combined submission (merged PDFs).
     *
     */
    public function testGetCombinedSubmission()
    {
      $combined_submission_id = 'com_000000000000000001'; // string |
      $result = $this->apiInstance->getCombinedSubmission($combined_submission_id);
      $this->assertStringStartsWith('com_', $result->getId());
    }

    /**
     * Test case for getSubmission
     *
     * Check the status of a PDF.
     *
     */
    public function testGetSubmission()
    {
      $submission_id = 'sub_000000000000000001'; // string |
      $result = $this->apiInstance->getSubmission($submission_id);
      $this->assertStringStartsWith('sub_', $result->getId());
    }

    /**
     * Test case for listTemplates
     *
     * Get a list of all templates.
     *
     */
    public function testListTemplates()
    {
      $query = 'API Client Test Template 2'; # String | Search By Name
      $page = 1; // int | Default: 1
      $per_page = 10; // int | Default: 50
      $responses = $this->apiInstance->listTemplates($query, $page, $per_page);
      $this->assertCount(1, $responses);
      $firstTemplate = $responses[0];
      $this->assertEquals('tpl_000000000000000002', $firstTemplate->getId());
    }

    /**
     * Test case for testAuthentication
     *
     * Test Authentication.
     *
     */
    public function testTestAuthentication()
    {
      $result = $this->apiInstance->testAuthentication();
      $this->assertEquals('success', $result->getStatus());
    }
}
