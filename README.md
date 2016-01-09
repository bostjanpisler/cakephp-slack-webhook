# CakePHP 2 Slack Webhook component

CakePHP 2 Component for posting to Slack Webhook integration

## Requirements

* PHP 5.2.8+
* CakePHP 2.x

## Installation

* Copy the file SlackWebhookComponent.php to `app/Controller/Component`

### Enable the component

In your AppController.php add the following component configuration:

```php
class AppController extends Controller {

  public $components = array(
    'SlackWebhook' => array(
      'webhook_url' => 'YOUR_SLACK_WEBHOOK_URL'
    )
  );

}
```

## Usage

Once enabled, the component can be used in your code as follows:

```php
class SomeController extends AppController{
	public function doSomething() {

    $this->SlackWebhook->send('Great news, click <http://www.google.com|here> for details.');

	}
}
```
The method returns a HttpSocket request's response information.

Only text parameter is required, the rest of the information is set by Slack based on your webhook's configuration.

If you wish to manually override the other parameters, the method takes these parameters:

```php
$this->SlackWebhook->send($text, $channel = null, $username = null, $icon_emoji = null, $url = null)
```
