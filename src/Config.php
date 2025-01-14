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

namespace ControlAltDelete\FathomAnalytics;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    public function __construct(
        private readonly ScopeConfigInterface $config
    ) {}

    public function isEnabled(): bool
    {
        return $this->config->isSetFlag('fathom_analytics/general/enabled');
    }

    public function isEnabledInDeveloperMode(): bool
    {
        return $this->config->isSetFlag('fathom_analytics/general/enabled_in_developer_mode');
    }

    public function getSiteId(): ?string
    {
        return $this->config->getValue('fathom_analytics/general/site_id');
    }
}
