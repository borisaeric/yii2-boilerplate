<?php

namespace api\components\responses;

class ErrorResponse extends ApiResponse
{
    protected $status = 400;

    public function __construct($errors, $status = null)
    {
        $this->setErrors((array) $errors);

        if ($status) {
            $this->setStatus($status);
        }

        parent::__construct();
    }

    public function asArray()
    {
        return [
            'success' => false,
            'code' => $this->getStatus(),
            'errors' => array_values($this->getErrors())
        ];
    }
}
