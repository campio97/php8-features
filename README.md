# PHP 8+ Features & Laravel Concepts

A playground project demonstrating modern PHP features (8.0 to 8.4) and fundamental Laravel architectural concepts.

## 📋 Requirements

- **PHP**: >= 8.5 (as per `composer.json`)
- **Composer** (for dependencies)

## 🚀 Features & Examples

### PHP 8.0 - 8.3

- **[Match Expressions](php_match_expression.php)**: Cleaner alternative to switch statements.
- **[Named Arguments](named_arguments.php)**: Pass arguments by name rather than position.
- **[Nullsafe Operator](nullsafe_operator.php)**: Safe property/method access (`?->`).
- **[Constructor Property Promotion](constructor_property_promotion.php)**: Boilerplate reduction for class properties.
- **[Union Types](union_types.php)**: Type declarations accepting multiple types.
- **[Intersection Types](intersaction_types.php)**: Type declarations requiring multiple interfaces.
- **[Enums](enums.php)**: Native enumerations.
- **[Fibers](fibers.php)**: Low-level concurrency primitives.
- **[Weak Map](weak_map.php)**: Garbage-collection friendly object maps.
- **[Attributes](php_attributes.php)**: Native metadata for classes/methods.
- **[Closures](closures.php)**: Anonymous functions.

### PHP 8.4

- **[Lazy Initialization](lazy_inizialization.php)**: Examples of lazy loading patterns.

### Laravel / Architectural Concepts

- **[Laravel Facade](laravel_facade.php)**: Simulating Laravel's Facade pattern.
- **[Dependency Injection](dependency_injection.php)**: Container and injection basics.
- **[Routing & Middleware](clousersSimulationRoutingMiddleware.php)**: Simulating Laravel's routing pipeline using closures.
- **[Interfaces](laravel_interfaces.php)**: Contract definitions.
- **[Magic Methods](magic_methods.php)**: PHP's `__get`, `__set`, `__call`, etc.

## 🛠 Usage

You can run any of the files directly via CLI or serve the directory using a PHP server.

### Via CLI

```bash
php php_match_expression.php
```

### Via Built-in Server

```bash
php -S localhost:8000
```

Then visit `http://localhost:8000` to see the index page.
