
<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . MYSQL_HOST . ';'.'dbname=' . MYSQL_DB . ';'.'charset=utf8', MYSQL_USER, MYSQL_PASS);
        //$this->deploy();
    }

    private function deploy()
    {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();
        if (count($tables) < 3) {
            $sql = <<<END
                --
                -- Table structure for table `bodegas`
                --
                
                CREATE TABLE `bodegas` (
                  `id_bodega` int(11) NOT NULL,
                  `nombre` varchar(45) NOT NULL,
                  `pais` varchar(45) NOT NULL,
                  `provincia` varchar(45) NOT NULL,
                  `descripcion` text NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                --
                -- Dumping data for table `bodegas`
                --
                
                INSERT INTO `bodegas` (`id_bodega`, `nombre`, `pais`, `provincia`, `descripcion`) VALUES
                (5, 'Catena Zapata', 'Argentina', 'Mendoza', 'Recibio el premio a la mejor bodega del mundo'),
                (6, 'Cordon blanco', 'Argentina', 'Buenos Aires', ' Radicada en Tandil'),
                (7, 'Saletein', 'Argentina', 'Mendoza', 'Una de las mejores bodegas del pais'),
                (8, 'Rutini', 'Argentina', 'Mendoza', 'Cuenta con una variedad de vinos catalogados como los mejores'),
                (9, 'Trapiche', 'Argentina', 'Mendoza', 'Una bodega de muchos años que se dedica dia a dia a tener los mejor vinos nacionales-.');
                
                -- --------------------------------------------------------
                
                --
                -- Table structure for table `usuarios`
                --
                
                CREATE TABLE `usuarios` (
                  `id_usuario` int(11) NOT NULL,
                  `email` varchar(256) NOT NULL,
                  `password` varchar(256) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                --
                -- Dumping data for table `usuarios`

                -- --------------------------------------------------------
                
                --
                -- Table structure for table `vinos`
                --
                
                CREATE TABLE `vinos` (
                  `id` int(11) NOT NULL,
                  `nombre` varchar(45) NOT NULL,
                  `bodega` int(11) NOT NULL,
                  `anio` int(11) NOT NULL,
                  `maridaje` varchar(45) NOT NULL,
                  `cepa` varchar(45) NOT NULL,
                  `stock` int(11) NOT NULL,
                  `precio` int(11) NOT NULL,
                  `caracteristica` text NOT NULL,
                  `recomendado` tinyint(1) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                --
                -- Dumping data for table `vinos`
                --
                
                INSERT INTO `vinos` (`id`, `nombre`, `bodega`, `anio`, `maridaje`, `cepa`, `stock`, `precio`, `caracteristica`, `recomendado`) VALUES
                (1, 'uno', 6, 2021, 'Carne', 'Malbec', 12, 2500, '', 0),
                (2, 'dos', 5, 2022, 'Pescado', 'Chardonnay', 9, 4000, '', 1),
                (3, 'tres', 6, 2021, 'Pastas', 'Bonarda', 4, 6500, '', 1),
                (4, 'cuatro', 7, 2020, 'Pescado', 'Pinot Noir', 8, 3500, '', 0),
                (5, 'cinco', 8, 2021, 'Carne', 'Malbec', 6, 2000, '', 1),
                (6, 'seis', 5, 2021, 'Vegetales', 'Shyra', 7, 4500, '', 1),
                (7, 'siete', 8, 2020, 'Carne', 'Cabernet Franc', 2, 6500, '', 1),
                (8, 'Rutini', 8, 2023, 'Pastas', 'Dulce Natural', 20, 2500, ' ', 1),
                (9, 'nueve', 5, 2021, 'Pescado', 'Malbec', 5, 5500, '', 0),
                (10, 'diez', 7, 2020, 'Carne', 'Malbec', 15, 3500, '', 1),
                (12, 'Angelica Zapata', 5, 2020, 'Carne Rojas', 'Cabernet Franc', 2, 7500, 'Es una excelente vino para acompañar con carne al asador.', 0),
                (13, 'Rutini Pinot', 8, 2021, 'Carne blancas', 'Pinot Noir', 23, 5440, 'a', 1);
                
                --
                -- Indexes for dumped tables
                --
                
                --
                -- Indexes for table `bodegas`
                --
                ALTER TABLE `bodegas`
                  ADD PRIMARY KEY (`id_bodega`);
                
                --
                -- Indexes for table `usuarios`
                --
                ALTER TABLE `usuarios`
                  ADD PRIMARY KEY (`id_usuario`);
                
                --
                -- Indexes for table `vinos`
                --
                ALTER TABLE `vinos`
                  ADD PRIMARY KEY (`id`),
                  ADD KEY `bodega` (`bodega`);
                
                --
                -- AUTO_INCREMENT for dumped tables
                --
                
                --
                -- AUTO_INCREMENT for table `bodegas`
                --
                ALTER TABLE `bodegas`
                  MODIFY `id_bodega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
                
                --
                -- AUTO_INCREMENT for table `usuarios`
                --
                ALTER TABLE `usuarios`
                  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
                
                --
                -- AUTO_INCREMENT for table `vinos`
                --
                ALTER TABLE `vinos`
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
                
                --
                -- Constraints for dumped tables
                --
                
                --
                -- Constraints for table `vinos`
                --
                ALTER TABLE `vinos`
                  ADD CONSTRAINT `vinos_ibfk_1` FOREIGN KEY (`bodega`) REFERENCES `bodegas` (`id_bodega`);
                COMMIT;
                END;
                $this->db->query($sql);
                $this->insertAdmin();
        }
    }


    private function insertAdmin()
    {
        $pass = password_hash("admin", PASSWORD_BCRYPT);
        $email = "webadmin@gmail.com";

        $query = $this->db->prepare("INSERT INTO `usuarios` (email, password) VALUES (? , ?)");
        $query->execute([$email, $pass]);
    }
}
?>