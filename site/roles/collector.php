<?php
return [
  'name'        => 'Collector',
  'default'     => false,
  'permissions' => [
    'panel.page.read' => function() {
      return $this->target()->page()->template() === 'dream';
    },
    'panel.site.update' => false,
    'panel.access.options' => false,
    'panel.widget.pages' => false,
    'panel.page.create' => function() {
      return $this->target()->page()->template() === 'dreams';
    },
    'panel.page.update' => function() {
      return $this->target()->page()->template() === 'dream';
    },
    'panel.page.delete' => false,
    'panel.page.visibility' => false,
    'panel.page.url' => false,
    'panel.file.sort' => false,

    'panel.user.*' => function() {
      return $this->user()->is($this->target()->user());
    },
    'panel.user.create' => false,
    'panel.user.delete' => false
  ]
];

?>
