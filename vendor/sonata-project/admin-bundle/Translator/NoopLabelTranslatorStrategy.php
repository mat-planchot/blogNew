<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Translator;

/**
 * Class NoopLabelTranslatorStrategy.
 *
 * @author  Thomas Rabaix <thomas.rabaix@sonata-project.org>
 */
class NoopLabelTranslatorStrategy implements LabelTranslatorStrategyInterface
{
    /**
     * {@inheritDoc}
     */
    public function getLabel($label, $context = '', $type = '')
    {
        return $label;
    }
}
