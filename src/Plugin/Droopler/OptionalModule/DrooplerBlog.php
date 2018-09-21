<?php

namespace Drupal\droopler\Plugin\Droopler\OptionalModule;

/**
 * Droopler blog.
 *
 * @DrooplerOptionalModule(
 *   id = "d_blog",
 *   label = @Translation("Enable Blog"),
 *   description = @Translation("Droopler brings out-of-the-box blog functionality. Check this option to enable blog listing and content type"),
 *   type = "module",
 *   standardlyEnabled = 1,
 *   submodules = {
 *    "d_blog_init",
 *   }
 * )
 */
class DrooplerBlog extends AbstractOptionalModule {}
