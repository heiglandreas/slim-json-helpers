<?php
use JsonHelpers\Renderer as Renderer;
use PHPUnit\Framework\TestCase;
use \Slim\Http\Response;


class JsonRendererTest extends TestCase
{
    public function testValidConstuctor(): void
    {
        $jsonRenderer = new Renderer();

        $this->assertInstanceOf('\JsonHelpers\Renderer', $jsonRenderer);
    }

    public function testValidResponse(): void
    {
        $jsonRenderer = new Renderer();

        $response = new Response();
        $response = $jsonRenderer->render($response, ['status' => 'ok'], 200);

        $this->assertTrue($response->getStatusCode() == 200);
        $this->assertTrue($response->getBody() == json_encode(['status' => 'ok']));
    }

}
