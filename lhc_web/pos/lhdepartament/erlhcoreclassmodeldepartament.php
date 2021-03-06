<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_departament";
$def->class = "erLhcoreClassModelDepartament";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentNativeGenerator' );

$def->properties['name'] = new ezcPersistentObjectProperty();
$def->properties['name']->columnName   = 'name';
$def->properties['name']->propertyName = 'name';
$def->properties['name']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['email'] = new ezcPersistentObjectProperty();
$def->properties['email']->columnName   = 'email';
$def->properties['email']->propertyName = 'email';
$def->properties['email']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['priority'] = new ezcPersistentObjectProperty();
$def->properties['priority']->columnName   = 'priority';
$def->properties['priority']->propertyName = 'priority';
$def->properties['priority']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['department_transfer_id'] = new ezcPersistentObjectProperty();
$def->properties['department_transfer_id']->columnName   = 'department_transfer_id';
$def->properties['department_transfer_id']->propertyName = 'department_transfer_id';
$def->properties['department_transfer_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['transfer_timeout'] = new ezcPersistentObjectProperty();
$def->properties['transfer_timeout']->columnName   = 'transfer_timeout';
$def->properties['transfer_timeout']->propertyName = 'transfer_timeout';
$def->properties['transfer_timeout']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['identifier'] = new ezcPersistentObjectProperty();
$def->properties['identifier']->columnName   = 'identifier';
$def->properties['identifier']->propertyName = 'identifier';
$def->properties['identifier']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

// New chat notification configuration
$def->properties['online_hours_active'] = new ezcPersistentObjectProperty();
$def->properties['online_hours_active']->columnName   = 'online_hours_active';
$def->properties['online_hours_active']->propertyName = 'online_hours_active';
$def->properties['online_hours_active']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['mod'] = new ezcPersistentObjectProperty();
$def->properties['mod']->columnName   = 'mod';
$def->properties['mod']->propertyName = 'mod';
$def->properties['mod']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['tud'] = new ezcPersistentObjectProperty();
$def->properties['tud']->columnName   = 'tud';
$def->properties['tud']->propertyName = 'tud';
$def->properties['tud']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['wed'] = new ezcPersistentObjectProperty();
$def->properties['wed']->columnName   = 'wed';
$def->properties['wed']->propertyName = 'wed';
$def->properties['wed']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['thd'] = new ezcPersistentObjectProperty();
$def->properties['thd']->columnName   = 'thd';
$def->properties['thd']->propertyName = 'thd';
$def->properties['thd']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['frd'] = new ezcPersistentObjectProperty();
$def->properties['frd']->columnName   = 'frd';
$def->properties['frd']->propertyName = 'frd';
$def->properties['frd']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['sad'] = new ezcPersistentObjectProperty();
$def->properties['sad']->columnName   = 'sad';
$def->properties['sad']->propertyName = 'sad';
$def->properties['sad']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['sud'] = new ezcPersistentObjectProperty();
$def->properties['sud']->columnName   = 'sud';
$def->properties['sud']->propertyName = 'sud';
$def->properties['sud']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['start_hour'] = new ezcPersistentObjectProperty();
$def->properties['start_hour']->columnName   = 'start_hour';
$def->properties['start_hour']->propertyName = 'start_hour';
$def->properties['start_hour']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['end_hour'] = new ezcPersistentObjectProperty();
$def->properties['end_hour']->columnName   = 'end_hour';
$def->properties['end_hour']->propertyName = 'end_hour';
$def->properties['end_hour']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['inform_options'] = new ezcPersistentObjectProperty();
$def->properties['inform_options']->columnName   = 'inform_options';
$def->properties['inform_options']->propertyName = 'inform_options';
$def->properties['inform_options']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['inform_delay'] = new ezcPersistentObjectProperty();
$def->properties['inform_delay']->columnName   = 'inform_delay';
$def->properties['inform_delay']->propertyName = 'inform_delay';
$def->properties['inform_delay']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>