<?php declare(strict_types=1);

class DidacticResource {

    private string $name;
    private Topic $topic;
    private string $url;
    private Type $type;
  
    

    public function __construct(string $name, Topic $topic, string $url, Type $type) 
    {
        $this->name = $name;
        $this->url = $url;
        $this->topic = $topic;
        $this->type = $type;
    }

    public function getName(): string   
    {
        return $this->name;
    }
    public function getTopic(): string  
    {
        return $this->topic->value;
    }
    public function getUrl(): string
    {
        return $this->url;
    }
    public function getType(): string
    {
        return $this->type->value;
    }
}
?>