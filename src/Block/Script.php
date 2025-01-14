<?php
/*
 *     ______            __             __
 *    / ____/___  ____  / /__________  / /
 *   / /   / __ \/ __ \/ __/ ___/ __ \/ /
 *  / /___/ /_/ / / / / /_/ /  / /_/ / /
 *  \______________/_/\__/_/   \____/_/
 *     /   |  / / /_
 *    / /| | / / __/
 *   / ___ |/ / /_
 *  /_/ _|||_/\__/ __     __
 *     / __ \___  / /__  / /____
 *    / / / / _ \/ / _ \/ __/ _ \
 *   / /_/ /  __/ /  __/ /_/  __/
 *  /_____/\___/_/\___/\__/\___/
 *
 * Copyright www.controlaltdelete.dev
 */

declare(strict_types=1);

namespace ControlAltDelete\FathomAnalytics\Block;

use ControlAltDelete\FathomAnalytics\Config;
use Magento\Framework\App\State;
use Magento\Framework\View\Element\Template;

class Script extends Template
{
    public function __construct(
        Template\Context $context,
        private readonly Config $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getSiteId(): ?string
    {
        return $this->config->getSiteId();
    }

    protected function _toHtml()
    {
        if (!$this->config->isEnabled()) {
            return '';
        }

        if (!$this->config->isEnabledInDeveloperMode() &&
            $this->_appState->getMode() === State::MODE_DEVELOPER
        ) {
            return '';
        }

        return parent::_toHtml();
    }
}
