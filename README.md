# Yii2-crontab
Simple Yii2 extension to log all requested routes. 

## Installing

Composer installation

```
composer require djiney/yii2-routes-logger dev-master
```

## Configuration



### Migration

Just run base Yii2 migration with custom path

```
php yii migrate/up --migrationPath=@vendor/djiney/yii2-routes-logger/src/migrations/
```

### Bootstrap

Add a configuration array to the bootstrap part of your application:

```
'bootstrap' => [
   ...
   [
      'class'  => 'djiney\routes\components\RoutesLogger',
      'filter' => 'djiney\routes\components\RoutesLoggerFilter'
   ],
   ...
],
```

If you use a "Yii2 Advanced Application", you can specify different settings to frontend and backend.

Filter is not necessary, but if you don't need too many logs - feel free to use the default one (which allows you to get rid of guest's routes logs), or just create your own.

The filter should implement RoutesLoggerFilterInterface. 
