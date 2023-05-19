1. Methods to retrieve a reflection property or a reflection method:

 private function getReflProperty(string $className, string $property, object $object, $value = null): ReflectionProperty
    {
        $reflectedClass = new ReflectionClass($className);

        $reflectionProperty = $reflectedClass->getProperty($property);
        $reflectionProperty->setAccessible(true);

        if (!empty($value)) {
            $reflectionProperty->setValue($object, $value);
        }

        return $reflectionProperty;
    }

    private function getReflMethod(string $className, string $method): \ReflectionMethod
    {
        $reflectedClass = new ReflectionClass($className);

        $reflectionMethod = $reflectedClass->getMethod($method);
        $reflectionMethod->setAccessible(true);

        return $reflectionMethod;
    }

2. Using the reflection methods:
- Reflection property:

 $this->getReflProperty(
    RG_Chart_ChartSource::class,
    'aOptionValues',
    $this->activatedAccounts,
    ['sSchemeID' => 'S1', 'sDateFrom' => '2023-04', 'sDateTo' => '2023-05']
);

- Reflection method:

$activAccReflClass = $this->getReflMethod(
    RG_Scheme_Chart_ActivatedAccounts::class,
    'process',
);

$result = $activAccReflClass->invokeArgs($this->activatedAccounts, [
    [1], new \DateTime('2015-03'), new \DateTime('2023-05'),
]);
