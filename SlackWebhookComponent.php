<?php
App::uses('Component', 'Controller');

class SlackWebhookComponent extends Component {

  public $webhook_url = null;

  public function send($text, $channel = null, $username = null, $icon_emoji = null, $url = null) {

    App::uses('HttpSocket', 'Network/Http');
    $HttpSocket = new HttpSocket();

    $url = $url ? $url : $this->webhook_url;

    $payload = array();
    $payload['text'] = $text;
    if ($channel) $payload['channel'] = $channel;
    if ($username) $payload['username'] = $username;
    if ($icon_emoji) $payload['icon_emoji'] = $icon_emoji;

    $results = $HttpSocket->post($url, json_encode($payload));

    return $results;
  }
}
?>
