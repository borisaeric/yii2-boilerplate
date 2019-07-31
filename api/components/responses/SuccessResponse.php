<?php

namespace api\components\responses;

class SuccessResponse extends ApiResponse
{
    protected $status = 200;

    public function __construct($data, $status = null)
    {
        $this->setData($data);

        if ($status) {
            $this->setStatus($status);
        }

        parent::__construct();
    }

    public function asArray()
    {
        return [
            'success' => true,
            'code' => $this->getStatus(),
            'data' => $this->getSerializedData(),
        ];
    }
}
