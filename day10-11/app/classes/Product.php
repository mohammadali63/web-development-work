<?php

namespace App\classes;

class Product
{
    public $products = [];
    public $data =[];

    public function __construct()
    {
        $this->products =[
            0=>[
                'id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Samsung Galaxy F23 5G-6GB/128GB Smartphone',
                'short_description' => 'Display Size 6.6 FHD+ TFT Infinity-V display
                                        Rear Camera: 50MP + 8MP + 2MP
                                        Front Camera -8 MP',
                'price'             => 30101,
                'long_description'  => 'Product details of Samsung Galaxy F23 5G-6GB/128GB Smartphone
                                        NO RETURN applicable if the seal is broken
                                        Prices are subject to change upon direction on 5% VAT from Government
                                        Display Size 6.6 FHD+ TFT Infinity-V display
                                        Rear Camera: 50MP + 8MP + 2MP
                                        Front Camera -8 MP
                                        RAM Size (GB): 6GB
                                        ROM Size (GB):128GB
                                        Network : 5G
                                        Battery Capacity (mAh, Typical):5000
                                        #smart phone',
                'img'               => 'sm1.jpg',
                
            ],
            1=>['id'                => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'Acer Predator Helios 300FHD Display Abyssal Black Gaming Laptop',
                'short_description' => 'Acer Predator Helios 300 PH315 53 70PF Intel Core i7 10870H 15.6 Inch FHD Display Abyssal Black Gaming Laptop',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer.jpg',
                ],
            2=>['id'                => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp1.jpg',
                ],
            3=>['id'                => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell1.jpg',
                ],
            4=>['id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l1.jpg',
                ],
            5=>['id'                => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Redmi Note 11s - 8GB RAM/128GB ROM - Mobile Phone',
                'short_description' => 'OS: Android 11, MIUI 13
                                        Memory:128GB 8GB RAM
                                        Network Technology: GSM / HSPA / LTE',
                'price'             => 28776,
                'long_description'  => 'Product details of Redmi Note 11s - 8GB RAM/128GB ROM - Mobile Phone
                                            Prices are subject to change upon direction on 5% VAT from Government
                                            NO RETURN applicable if the seal is broken
                                            Network Technology: GSM / HSPA / LTE
                                            Dimensions: 159.9 x 73.9 x 8.1 mm (6.30 x 2.91 x 0.32 in)
                                            SIM: Dual SIM (Nano-SIM, dual stand-by)
                                            Type: AMOLED, 90Hz, 700 nits, 1000 nits (peak)
                                            Size: 6.43 inches, 99.8 cm2 (~84.5% screen-to-body ratio)
                                            Resolution: 1080 x 2400 pixels, 20:9 ratio (~409 ppi density)
                                            OS: Android 11, MIUI 13
                                            Memory:128GB 8GB RAM
                                            Main Camera:108MP wide camera (Samsung HM2, f/1.9) + 8MP ultra-wide camera (f/2.2) + 2MP macro camera (f/2.4) + 2MP depth camera (f/2.4)
                                            Selfie Camera:16 MP, f/2.5, (wide), 1/3.06" 1.0ÃÂµm
                                            Bluetooth: 5.0, A2DP, LE
                                            Battery: Li-Po 5000 mAh, non-removable
                                            #phone',
                'img'               => 'sm2.jpg',
                ],
            6=>['id'                => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer1.jpg',
                ],
            7=>['id'                => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp2.jpg',
                ],
            8=>['id'                => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell2.jpg',
                ],
            9=>['id'                => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l2.jpg',
                ],
            10=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Galaxy M32 (6+128GB)',
                'short_description' => 'Brand Samsung
                                        Model Galaxy M32
                                        Fingerprint Sensor Yes
                                        Rear Camera 64 MP + 8 MP + 2 MP + 2 MP
                                        Front Camera 20 MP',
                'price'             => 19681,
                'long_description'  => 'Product details of Galaxy M32 (6+128GB)
                                        No Return applicable if the seal is broken
                                        Brand Samsung
                                        Model Galaxy M32
                                        Display Type FHD+ Super AMOLED Infinity-U
                                        Refresh Rate 90 Hz
                                        Capacity 6000 mAh , Type Li-ion
                                        Screen Size 6.4 inches (16.26 cm)
                                        Memory: 6GB RAM and 128GB ROM
                                        Operating System Android v11
                                        Custom Ui Samsung One UI
                                        Sim Slots Dual SIM, GSM+GSM
                                        Fingerprint Sensor Yes
                                        Rear Camera 64 MP + 8 MP + 2 MP + 2 MP
                                        Front Camera 20 MP',
                'img'               => 'sm3.jpg',
                ],
            11=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer2.jpg',
                ],
            12=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp3.jpg',
                ],
            13=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell11.jpg',
                ],
            14=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l3.jpg',
                ],
            15=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Samsung Galaxy F22 (6/128GB)',
                'short_description' => 'Battery 6000mAh
                                        Dimensions 160.0 x 74.0 x 9.4
                                        Front Camera 13 MP
                                        Rear Camera 48 MP',
                'price'             => 23279,
                'long_description'  => 'Product details of Samsung Galaxy F22 (6/128GB)
                                        Battery 6000mAh
                                        Dimensions 160.0 x 74.0 x 9.4
                                        Front Camera 13 MP
                                        Rear Camera 48 MP
                                        Chipset Mediatek Helio G80 (12 nm)
                                        GPU Octa-core (2x2.0 GHz Cortex-A75 & 6x1.8 GHz Cortex-A55)
                                        Operating System Android 11, One UI Core 3.1
                                        RAM 6 GB
                                        Processor No
                                        Built in Memory 128GB
                                        Memory Support microSDXC (dedicated slot)
                                        Model Galaxy F22
                                        Screensize 6.4 inches
                                        Protection Glass front, plastic frame, plastic back, fingerprint (side-mounted), accelerometer, gyro, proximity, compass',
                'img'               => 'sm4.jpg',
                ],
            16=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer3.jpg',
                ],
            17=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp4.jpg',
                ],
            18=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell4.jpg',
                ],
            19=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l4.jpg',
                ],
            20=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Samsung Galaxy A03 Core (2/32 GB) Smartphone',
                'short_description' => 'NO RETURN applicable if the seal is broken
                                        Prices are subject to change upon direction on 5% VAT from Government
                                        NETWORK Technology
                                        GSM / HSPA / LTE',
                'price'             => 11307,
                'long_description'  => 'Product details of Samsung Galaxy A03 Core (2/32 GB) Smartphone
                                        NO RETURN applicable if the seal is broken
                                        Prices are subject to change upon direction on 5% VAT from Government
                                        NETWORK Technology
                                        GSM / HSPA / LTE
                                        LAUNCH Announced 2021, November 15
                                        Status Available. Released 2021, December 06
                                        BODY Dimensions 164.2 x 75.9 x 9.1 mm (6.46 x 2.99 x 0.36 in)
                                        Weight 211 g (7.44 oz)
                                        Build Plastic back, plastic frame
                                        SIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)
                                        DISPLAY Type PLS TFT
                                        Size 6.5 inches, 102.0 cm2 (~81.8% screen-to-body ratio)
                                        Resolution 720 x 1600 pixels, 20:9 ratio (~270 ppi density)
                                        PLATFORM OS Android 11 (Go edition)
                                        Chipset Unisoc SC9863A (28nm)
                                        CPU Octa-core (4x1.6 GHz Cortex-A55 & 4x1.2 GHz Cortex-A55)
                                        GPU IMG8322
                                        MEMORY Card slot microSDXC (dedicated slot)
                                        Internal 32GB 2GB RAM
                                        eMMC 5.1
                                        MAIN CAMERA Single 8 MP, f/2.0, AF
                                        Features LED flash
                                        Video 1080p@30fps
                                        SELFIE CAMERA Single 5 MP, f/2.2
                                        Video
                                        SOUND Loudspeaker Yes
                                        3.5mm jack Yes
                                        COMMS WLAN Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot
                                        Bluetooth 4.2, A2DP
                                        GPS Yes, with A-GPS, GLONASS
                                        NFC No
                                        Radio Unspecified
                                        USB microUSB 2.0, USB On-The-Go
                                        FEATURES Sensors Accelerometer, proximity
                                        BATTERY Type Li-Ion 5000 mAh, non-removable',
                'img'               => 'sm5.jpg',
                ],
            21=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer3.jpg',
                ],
            22=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp5.jpg',
                ],
            23=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell5.jpg',
                ],
            25=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l5.jpg',
                ],
            26=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Samsung Galaxy Z Flip4',
                'short_description' => 'NO RETURN applicable if the seal is broken
                                        OS:Android 12, One UI 4.1.1
                                        SIM: Nano-SIM, eSIM
                                        RAM: 8GB
                                        ROM: 128GB',
                'price'             => 148645,
                'long_description'  => 'Product details of Samsung Galaxy Z Flip4
                                        NO RETURN applicable if the seal is broken
                                        OS:Android 12, One UI 4.1.1
                                        SIM: Nano-SIM, eSIM
                                        RAM: 8GB
                                        ROM: 128GB
                                        Chipset: Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm)
                                        CPU: Octa-core (1x3.19 GHz Cortex-X2 & 3x2.75 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510)
                                        Battery: Li-Po 3700 mAh, non-removable
                                        Camera:12 MP, f/1.8, 24mm (wide), 1.8Âµm, Dual Pixel PDAF, OIS
                                        Selfie Camera: 10 MP, f/2.4, 26mm (wide), 1.22Âµm
                                        Display: 6.7 inches, 101.5 cm2(~85.4% screen-to-body ratio)
                                        Loudspeaker:Yes, with stereo speakers
                                        Sensors:Fingerprint (side-mounted), accelerometer, gyro, proximity, compass, barometerSamsung Pay (Visa, MasterCard certified)',
                'img'               => 'sm6.jpg',
                ],
            27=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer4.jpg',
                ],
            28=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp6.jpg',
                ],
            29=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell6.jpg',
                ],
            30=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l6.jpg',
                ],
            31=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Samsung Galaxy A03s 4GB/64GB',
                'short_description' => 'OS: Android 11, One UI 3.1 Core
                                        Chipset: MediaTek MT6765 Helio P35 (12nm)
                                        CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)',
                'price'             => 18599,
                'long_description'  => 'Product details of Samsung Galaxy A03s 4GB/64GB
                                        OS: Android 11, One UI 3.1 Core
                                        Chipset: MediaTek MT6765 Helio P35 (12nm)
                                        CPU: Octa-core (4x2.35 GHz Cortex-A53 & 4x1.8 GHz Cortex-A53)
                                        GPU: PowerVR GE8320
                                        Display Size: 6.5 inches | PLS LCD
                                        Display Resolution: 720 x 1600 pixels, 20:9 ratio (~270 ppi density)
                                        RAM: 4GB
                                        ROM: 64GB
                                        Back Camera: 13MP+2MP+2MP
                                        Video Feature: 1080p@30fps
                                        Front Camera: 5MP
                                        Battery: Li-Po 5000 mAh | non-removable | Fast charging 15W
                                        Connectivity: Wi-Fi 802.11 b/g/n|Bluetooth: 5.0, A2DP|GPS: with A-GPS, GLONASS, GALILEO, BDS|USB Type-C 2.0
                                        Sensors: Fingerprint (side-mounted) | accelerometer | proximity',
                'img'               => 'sm7.jpg',
                ],
            33=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer5.jpg',
                ],
            34=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp7.jpg',
                ],
            35=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell7.jpg',
                ],
            36=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l7.jpg',
                ],
            37=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Intel Core i5 RAM 4GB HDD 500GB GraphicsDesktop Computer Set',
                'short_description' => 'Intel Core i5 RAM 4GB HDD 500GB Graphics 2GB Built in Gaming PC Win 10 64 Bit And Monitor 19 inch Full NEW Desktop Computer Set',
                'price'             => 18500,
                'long_description'  => 'Product details of Intel Core i5 RAM 4GB HDD 500GB Graphics 2GB Built in Gaming PC Win 10 64 Bit And Monitor 19 inch Full NEW Desktop Computer Set
                                        Monitor : 19 inch (Any China Brand) (Monitor can be different from the given pictures)
                                        Processor : Intel Core i5, 3.20 - 3.19 GHz
                                        RAM : 4GB DDR3 Any Brands
                                        Hard Disk : 500GB WD/Seagate/Toshiba/Hitachi/Samsung (or Others Brands)
                                        Motherboard Brand : Intel/Gigabyte/Foxcon/Esonic/Speed Or Any Others Brand Motherboard Chipset: Intel
                                        Keyboard : Standard USB Keyboard (FREE)
                                        Mouse : Standard Optical Mouse (FREE)
                                        Casing : GIGASONIC / OVO / EROCK / CIRCLE / STAR SONIC / DBM / Win Tech Or Any Others Brand (Casing can be different from the given',
                'img'               => 'smpc8.jpg',
                ],
            38=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer6.jpg',
                ],
            39=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp10.jpg',
                ],
            40=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell8.jpg',
                ],
            41=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l8.jpg',
                ],
            42=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Intel Core i5 RAM 8GB HDD 320GB GraphicsFull Desktop Computer',
                'short_description' => 'Intel Core i5 RAM 8GB HDD 320GB Graphics 2GB Built in Gaming PC Win 10 64 Bit And 19 inch Monitor New Full Desktop Computer',
                'price'             => 16999,
                'long_description'  => 'Product details of Intel Core i5 RAM 8GB HDD 320GB Graphics 2GB Built in Gaming PC Win 10 64 Bit And 19 inch Monitor New Full Desktop Computer
                                            Monitor : 19 inch (Any China Brand) (Monitor can be different from the given pictures)
                                            Processor : Intel Core i5, 3.20 - 3.19 GHz
                                            RAM : 8GB DDR3 Any Brands
                                            Hard Disk : 320GB WD/Seagate/Toshiba/Hitachi/Samsung (or Others Brands)
                                            Motherboard Brand : Intel/Gigabyte/Foxcon/Esonic/Speed Or Any Others Brand Motherboard Chipset: Intel
                                            Keyboard : Standard USB Keyboard (FREE)
                                            Mouse : Standard Optical Mouse (FREE)
                                            Casing : GIGASONIC / OVO / EROCK / CIRCLE / STAR SONIC / DBM / Win Tech Or Any Others Brand (Casing can be different from the given pictures)',
                'img'               => 'smpc9.jpg',
                ],
            43=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer7.jpg',
                ],
            44=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp6.jpg',
                ],
            45=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell9.jpg',
                ],
            46=>['id'               => 1,
                'category_id'       => 5,
                'brand_id'          => 5,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'l9.jpg',
                ],
            47=>['id'               => 1,
                'category_id'       => 1,
                'brand_id'          => 1,
                'name'              => 'Intel Dual Core RAM 8GB HDD 500GB Graphics Desktop Computer',
                'short_description' => 'Intel Dual Core RAM 8GB HDD 500GB Graphics Built in and Monitor 19 HP / Dell / Samsung Gaming PC Windows 10 64 Bit NEW Desktop Computer 2021',
                'price'             => 32500,
                'long_description'  => 'Product details of Intel Dual Core RAM 8GB HDD 500GB Graphics Built in and Monitor 19 HP / Dell / Samsung Gaming PC Windows 10 64 Bit NEW Desktop Computer 2021
                                        Monitor : 19 inch HP / Dell / Samsung Brand (Monitor can be different from the given pictures)
                                        Processor : Intel Dual Core 3.00 - 3.20GHz
                                        RAM : RAM 8GB Any Brands
                                        Hard Disk : 500GB WD/Seagate/Toshiba/Hitachi/Samsung (or Others Brands)
                                        Motherboard Brand : Intel/Gigabyte/Foxcon/Esonic/Speed Or Any Others Brand
                                        Motherboard Chipset: Intel
                                        Keyboard : Standard USB Keyboard (FREE)
                                        Mouse : Standard Optical Mouse (FREE)',
                'img'               => 'smpc10.jpg',
                ],
            48=>['id'               => 1,
                'category_id'       => 2,
                'brand_id'          => 2,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'acer8.jpg',
                ],
            49=>['id'               => 1,
                'category_id'       => 3,
                'brand_id'          => 3,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'hp8.jpg',
                ],
            50=>['id'               => 1,
                'category_id'       => 4,
                'brand_id'          => 4,
                'name'              => 'This is product Name',
                'short_description' => 'This is short description',
                'price'             => 1500,
                'long_description'  => 'This is long description This is long description',
                'img'               => 'dell10.jpg',
                ],
        ];
        return $this->products;
    }

    public function getProductByBrandId($brand_id)
    {
        foreach ($this->products as $product)
        {
            if ($product['brand_id'] == $brand_id)
            {
                array_push($this->data, $product );
            }
        }
        return $this->data;
    }
    public function getProductByCategoryId($cat_id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $cat_id)
            {
                array_push($this->data, $product);
            }
        }
        return$this->data;
    }
}