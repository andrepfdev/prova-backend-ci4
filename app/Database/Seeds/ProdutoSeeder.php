<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome' => 'Produto 01',
                'descricao' => 'Descrição do Produto 01',
                'preco' => 100.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Produto 02',
                'descricao' => 'Descrição do Produto 02',
                'preco' => 200.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Produto 03',
                'descricao' => 'Descrição do Produto 03',
                'preco' => 300.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Produto 04',
                'descricao' => 'Descrição do Produto 04',
                'preco' => 400.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'nome' => 'Produto 05',
                'descricao' => 'Descrição do Produto 05',
                'preco' => 500.00,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($data as $produto) {
            $this->db->table('produtos')->insert($produto);
        }
    }
}
