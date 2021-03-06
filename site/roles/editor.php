<?php
return [
  'name'        => 'Editor',
  'default'     => false,
  'permissions' => [
    'panel.site.update' => false,
    'panel.access.options' => false,
    'panel.page.create' => function() {
      return $this->target()->page()->template() === 'dreams';
    },
    'panel.page.update' => function() {
      return $this->target()->page()->template() === 'dream';
    },
    'panel.page.delete' => false,
    'panel.page.visibility' => false,

    'panel.user.*' => function() {
      return $this->user()->is($this->target()->user());
    },
    'panel.user.create' => false,
    'panel.user.delete' => false
  ]
];

?>
