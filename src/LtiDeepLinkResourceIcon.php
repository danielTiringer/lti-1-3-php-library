<?php

namespace Packback\Lti1p3;

use Packback\Lti1p3\Helpers\HasDimensions;

class LtiDeepLinkResourceIcon
{
    use HasDimensions;

    public function __construct(
        private string $url,
        private int $width,
        private int $height
    ) {
    }

    public static function new(string $url, int $width, int $height): self
    {
        return new LtiDeepLinkResourceIcon($url, $width, $height);
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function toArray(): array
    {
        return [
            'url' => $this->url,
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
