<?php
    // vars
    $device_name        = get_field('device-name');
    $device_subtitle    = get_field('device-subtitle');
    $device_desc        = get_field('device-desc');
    $device_image       = get_field('device-image');
?>

<article class="device">
    <div class="device__image">
        <img src="<?php echo $device_image; ?>" alt="Зарядное устройство <?php echo $device_name; ?>" />
    </div>
    <div class="device__header-n-content">
        <header class="device__header">
            <h3 class="device__title"><?php echo $device_name; ?></h3>
            <p class="device__subtitle"><?php echo $device_subtitle; ?></p>
        </header>
        <div class="device__content">
            <p><?php echo $device_desc; ?></p>
        </div>
    </div>
</article>