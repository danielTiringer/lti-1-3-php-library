<?php

namespace Packback\Lti1p3;

use Packback\Lti1p3\Helpers\HasDimensions;

class LtiDeepLinkResourceIframe
{
    use HasDimensions;

    public function __construct(
        private ?string $src = null,
        private ?int $width = null,
        private ?int $height = null
    ) {
    }

    public static function new(): self
    {
        return new LtiDeepLinkResourceIframe();
    }

    public function setSrc(?string $src): self
    {
        $this->src = $src;

        return $this;
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function toArray(): array
    {
        $iframe = [];

        if (isset($this->width)) {
            $iframe['width'] = $this->width;
        }
        if (isset($this->height)) {
            $iframe['height'] = $this->height;
        }
        if (isset($this->src)) {
            $iframe['src'] = $this->src;
        }

        return $iframe;
    }
}
