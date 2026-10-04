# Prueba Práctica Magento 2 (Back-End)

Módulos `Company_HealthCheck` y `Company_PricingAdjust`.

## Versión de Magento

Magento Open Source 2.4.9

## Instalación de los módulos

1. Copiar la carpeta `app/code/Company` en `app/code/` de la instalación de Magento.
2. Ejecutar desde la raíz de Magento:

```bash
bin/magento module:enable Company_HealthCheck Company_PricingAdjust
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento cache:flush
```

## Probar el endpoint

```bash
curl https://<dominio>/rest/V1/company/healthcheck
```

Respuesta:

```json
{
    "status": "ok",
    "message": "El sistema está funcionando correctamente"
}
```

## Probar el plugin

1. En el admin ir a **Stores > Configuration > Company > Pricing Adjustments** y en **Markup Percentage** poner `10`.
2. Limpiar caché: `bin/magento cache:flush`.
3. Abrir la página de un producto con precio `100` en la tienda. El precio debe mostrarse como `110`.

## Comando CLI

```bash
bin/magento company:health:check
```

Salida:

```
El sistema está funcionando correctamente
```

## Evidencias

Capturas en `docs/evidencias/`.
