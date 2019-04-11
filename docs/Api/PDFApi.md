# FormAPI\PDFApi

All URIs are relative to *https://api.formapi.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batchGeneratePdfV1**](PDFApi.md#batchGeneratePdfV1) | **POST** /templates/{template_id}/submissions/batch | Generates multiple PDFs
[**batchGeneratePdfs**](PDFApi.md#batchGeneratePdfs) | **POST** /submissions/batches | Generates multiple PDFs
[**combinePdfs**](PDFApi.md#combinePdfs) | **POST** /combined_submissions?v&#x3D;2 | Merge submission PDFs, template PDFs, or custom files
[**combineSubmissions**](PDFApi.md#combineSubmissions) | **POST** /combined_submissions | Merge generated PDFs together
[**createCustomFileFromUpload**](PDFApi.md#createCustomFileFromUpload) | **POST** /custom_files | Create a new custom file from a cached presign upload
[**createDataRequestToken**](PDFApi.md#createDataRequestToken) | **POST** /data_requests/{data_request_id}/tokens | Creates a new data request token for form authentication
[**createTemplate**](PDFApi.md#createTemplate) | **POST** /templates | Upload a new PDF template with a file upload
[**createTemplateFromUpload**](PDFApi.md#createTemplateFromUpload) | **POST** /templates?v&#x3D;2 | Create a new PDF template from a cached presign upload
[**expireCombinedSubmission**](PDFApi.md#expireCombinedSubmission) | **DELETE** /combined_submissions/{combined_submission_id} | Expire a combined submission
[**expireSubmission**](PDFApi.md#expireSubmission) | **DELETE** /submissions/{submission_id} | Expire a PDF submission
[**generatePDF**](PDFApi.md#generatePDF) | **POST** /templates/{template_id}/submissions | Generates a new PDF
[**getCombinedSubmission**](PDFApi.md#getCombinedSubmission) | **GET** /combined_submissions/{combined_submission_id} | Check the status of a combined submission (merged PDFs)
[**getDataRequest**](PDFApi.md#getDataRequest) | **GET** /data_requests/{data_request_id} | Look up a submission data request
[**getPresignUrl**](PDFApi.md#getPresignUrl) | **GET** /uploads/presign | Get a presigned URL so that you can upload a file to our AWS S3 bucket
[**getSubmission**](PDFApi.md#getSubmission) | **GET** /submissions/{submission_id} | Check the status of a PDF
[**getSubmissionBatch**](PDFApi.md#getSubmissionBatch) | **GET** /submissions/batches/{submission_batch_id} | Check the status of a submission batch job
[**getTemplate**](PDFApi.md#getTemplate) | **GET** /templates/{template_id} | Check the status of an uploaded template
[**getTemplateSchema**](PDFApi.md#getTemplateSchema) | **GET** /templates/{template_id}/schema | Fetch the JSON schema for a template
[**getTemplates**](PDFApi.md#getTemplates) | **GET** /templates | Get a list of all templates
[**testAuthentication**](PDFApi.md#testAuthentication) | **GET** /authentication | Test Authentication
[**updateDataRequest**](PDFApi.md#updateDataRequest) | **PUT** /data_requests/{data_request_id} | Update a submission data request


# **batchGeneratePdfV1**
> \FormAPI\Model\CreateSubmissionResponse[] batchGeneratePdfV1($template_id, $request_body)

Generates multiple PDFs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string | 
$request_body = array(new \FormAPI\Model\array()); // object[] | 

try {
    $result = $apiInstance->batchGeneratePdfV1($template_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **request_body** | [**object[]**](../Model/array.md)|  |

### Return type

[**\FormAPI\Model\CreateSubmissionResponse[]**](../Model/CreateSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchGeneratePdfs**
> \FormAPI\Model\CreateSubmissionBatchResponse batchGeneratePdfs($submission_batch_data)

Generates multiple PDFs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_batch_data = new \FormAPI\Model\SubmissionBatchData(); // \FormAPI\Model\SubmissionBatchData | 

try {
    $result = $apiInstance->batchGeneratePdfs($submission_batch_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->batchGeneratePdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_batch_data** | [**\FormAPI\Model\SubmissionBatchData**](../Model/SubmissionBatchData.md)|  |

### Return type

[**\FormAPI\Model\CreateSubmissionBatchResponse**](../Model/CreateSubmissionBatchResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **combinePdfs**
> \FormAPI\Model\CreateCombinedSubmissionResponse combinePdfs($combine_pdfs_data)

Merge submission PDFs, template PDFs, or custom files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combine_pdfs_data = new \FormAPI\Model\CombinePdfsData(); // \FormAPI\Model\CombinePdfsData | 

try {
    $result = $apiInstance->combinePdfs($combine_pdfs_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->combinePdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combine_pdfs_data** | [**\FormAPI\Model\CombinePdfsData**](../Model/CombinePdfsData.md)|  |

### Return type

[**\FormAPI\Model\CreateCombinedSubmissionResponse**](../Model/CreateCombinedSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **combineSubmissions**
> \FormAPI\Model\CreateCombinedSubmissionResponse combineSubmissions($combined_submission_data)

Merge generated PDFs together

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_submission_data = new \FormAPI\Model\CombinedSubmissionData(); // \FormAPI\Model\CombinedSubmissionData | 

try {
    $result = $apiInstance->combineSubmissions($combined_submission_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->combineSubmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_data** | [**\FormAPI\Model\CombinedSubmissionData**](../Model/CombinedSubmissionData.md)|  |

### Return type

[**\FormAPI\Model\CreateCombinedSubmissionResponse**](../Model/CreateCombinedSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomFileFromUpload**
> \FormAPI\Model\CreateCustomFileResponse createCustomFileFromUpload($create_custom_file_data)

Create a new custom file from a cached presign upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_custom_file_data = new \FormAPI\Model\CreateCustomFileData(); // \FormAPI\Model\CreateCustomFileData | 

try {
    $result = $apiInstance->createCustomFileFromUpload($create_custom_file_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createCustomFileFromUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_custom_file_data** | [**\FormAPI\Model\CreateCustomFileData**](../Model/CreateCustomFileData.md)|  |

### Return type

[**\FormAPI\Model\CreateCustomFileResponse**](../Model/CreateCustomFileResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDataRequestToken**
> \FormAPI\Model\CreateSubmissionDataRequestTokenResponse createDataRequestToken($data_request_id)

Creates a new data request token for form authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string | 

try {
    $result = $apiInstance->createDataRequestToken($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createDataRequestToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |

### Return type

[**\FormAPI\Model\CreateSubmissionDataRequestTokenResponse**](../Model/CreateSubmissionDataRequestTokenResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplate**
> \FormAPI\Model\PendingTemplate createTemplate($template_document, $template_name)

Upload a new PDF template with a file upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_document = "/path/to/file.txt"; // \SplFileObject | 
$template_name = 'template_name_example'; // string | 

try {
    $result = $apiInstance->createTemplate($template_document, $template_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_document** | **\SplFileObject****\SplFileObject**|  |
 **template_name** | **string**|  |

### Return type

[**\FormAPI\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplateFromUpload**
> \FormAPI\Model\PendingTemplate createTemplateFromUpload($create_template_data)

Create a new PDF template from a cached presign upload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_template_data = new \FormAPI\Model\CreateTemplateData(); // \FormAPI\Model\CreateTemplateData | 

try {
    $result = $apiInstance->createTemplateFromUpload($create_template_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->createTemplateFromUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_template_data** | [**\FormAPI\Model\CreateTemplateData**](../Model/CreateTemplateData.md)|  |

### Return type

[**\FormAPI\Model\PendingTemplate**](../Model/PendingTemplate.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expireCombinedSubmission**
> \FormAPI\Model\CombinedSubmission expireCombinedSubmission($combined_submission_id)

Expire a combined submission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_submission_id = com_000000000000000001; // string | 

try {
    $result = $apiInstance->expireCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_id** | **string**|  |

### Return type

[**\FormAPI\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **expireSubmission**
> \FormAPI\Model\Submission expireSubmission($submission_id)

Expire a PDF submission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_000000000000000001; // string | 

try {
    $result = $apiInstance->expireSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->expireSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_id** | **string**|  |

### Return type

[**\FormAPI\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePDF**
> \FormAPI\Model\CreateSubmissionResponse generatePDF($template_id, $submission_data)

Generates a new PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string | 
$submission_data = new \FormAPI\Model\SubmissionData(); // \FormAPI\Model\SubmissionData | 

try {
    $result = $apiInstance->generatePDF($template_id, $submission_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->generatePDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **submission_data** | [**\FormAPI\Model\SubmissionData**](../Model/SubmissionData.md)|  |

### Return type

[**\FormAPI\Model\CreateSubmissionResponse**](../Model/CreateSubmissionResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCombinedSubmission**
> \FormAPI\Model\CombinedSubmission getCombinedSubmission($combined_submission_id)

Check the status of a combined submission (merged PDFs)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combined_submission_id = com_000000000000000001; // string | 

try {
    $result = $apiInstance->getCombinedSubmission($combined_submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getCombinedSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combined_submission_id** | **string**|  |

### Return type

[**\FormAPI\Model\CombinedSubmission**](../Model/CombinedSubmission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataRequest**
> \FormAPI\Model\SubmissionDataRequest getDataRequest($data_request_id)

Look up a submission data request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string | 

try {
    $result = $apiInstance->getDataRequest($data_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getDataRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |

### Return type

[**\FormAPI\Model\SubmissionDataRequest**](../Model/SubmissionDataRequest.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPresignUrl**
> map[string,object] getPresignUrl()

Get a presigned URL so that you can upload a file to our AWS S3 bucket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPresignUrl();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getPresignUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmission**
> \FormAPI\Model\Submission getSubmission($submission_id, $include_data)

Check the status of a PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_id = sub_000000000000000001; // string | 
$include_data = false; // bool | 

try {
    $result = $apiInstance->getSubmission($submission_id, $include_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_id** | **string**|  |
 **include_data** | **bool**|  | [optional]

### Return type

[**\FormAPI\Model\Submission**](../Model/Submission.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubmissionBatch**
> \FormAPI\Model\SubmissionBatch getSubmissionBatch($submission_batch_id, $include_submissions)

Check the status of a submission batch job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$submission_batch_id = sbb_000000000000000001; // string | 
$include_submissions = true; // bool | 

try {
    $result = $apiInstance->getSubmissionBatch($submission_batch_id, $include_submissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getSubmissionBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submission_batch_id** | **string**|  |
 **include_submissions** | **bool**|  | [optional]

### Return type

[**\FormAPI\Model\SubmissionBatch**](../Model/SubmissionBatch.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \FormAPI\Model\Template getTemplate($template_id)

Check the status of an uploaded template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string | 

try {
    $result = $apiInstance->getTemplate($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

### Return type

[**\FormAPI\Model\Template**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateSchema**
> map[string,object] getTemplateSchema($template_id)

Fetch the JSON schema for a template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = tpl_000000000000000001; // string | 

try {
    $result = $apiInstance->getTemplateSchema($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplateSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

### Return type

**map[string,object]**

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \FormAPI\Model\Template[] getTemplates($page, $per_page)

Get a list of all templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Default: 1
$per_page = 1; // int | Default: 50

try {
    $result = $apiInstance->getTemplates($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Default: 1 | [optional]
 **per_page** | **int**| Default: 50 | [optional]

### Return type

[**\FormAPI\Model\Template[]**](../Model/Template.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testAuthentication**
> \FormAPI\Model\AuthenticationSuccessResponse testAuthentication()

Test Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->testAuthentication();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->testAuthentication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\FormAPI\Model\AuthenticationSuccessResponse**](../Model/AuthenticationSuccessResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDataRequest**
> \FormAPI\Model\UpdateDataRequestResponse updateDataRequest($data_request_id, $update_submission_data_request_data)

Update a submission data request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: api_token_basic
$config = FormAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new FormAPI\Api\PDFApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_request_id = drq_000000000000000001; // string | 
$update_submission_data_request_data = new \FormAPI\Model\UpdateSubmissionDataRequestData(); // \FormAPI\Model\UpdateSubmissionDataRequestData | 

try {
    $result = $apiInstance->updateDataRequest($data_request_id, $update_submission_data_request_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PDFApi->updateDataRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_request_id** | **string**|  |
 **update_submission_data_request_data** | [**\FormAPI\Model\UpdateSubmissionDataRequestData**](../Model/UpdateSubmissionDataRequestData.md)|  |

### Return type

[**\FormAPI\Model\UpdateDataRequestResponse**](../Model/UpdateDataRequestResponse.md)

### Authorization

[api_token_basic](../../README.md#api_token_basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

