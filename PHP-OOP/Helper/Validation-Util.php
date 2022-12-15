<?php
class ValidationUtil {
    static function validate(LoginRequest $request) {
        // tanpa reflection
        if (!isset($request->username)):
            throw new ValidationException("Username is null");
        elseif (!isset($request->password)):
            throw new ValidationException("Password is null");
        endif;

    }
    static function validateReflection($request) {
        // dengan reflection
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property):
            if (!$property->isInitialized($request)):
                throw new ValidationException("$property->name is not set");
            elseif (is_null($property->getValue($request))):
                throw new ValidationException("$property->name is null");
            endif;
        endforeach;
    }
}