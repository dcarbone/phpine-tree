<?php declare(strict_types=1);

namespace PHPineTree;

/**
 * Class PineTree
 * @package PHPineTree
 */
class PineTree
{
    private const THE_TREE = <<<EOT
     ____
    /    \
   |     |
    \____|
         |
         v
        >X<
         A
        d\$b
      .d\$\$b.
    .d\$i$$\$\$b.
       d$$@b
      d\$$\$ib
    .d$$$\$$\$b
  .d$$@$$$$\$\$ib.
      d$\$i$\$b
     d\$$$$@\$b
  .d$@$$\$$$$$@b.
.d$$$\$i$$$\$$$$$\$b.
        ###
        ###
        ### mh
EOT;

    /**
     *
     */
    public function echo(): void
    {
        echo self::THE_TREE;
    }

    /**
     * @return string
     */
    public function return(): string
    {
        return self::THE_TREE;
    }
}