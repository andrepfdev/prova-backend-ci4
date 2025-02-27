<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'cpf_cnpj' => '55379165419',
                'nome_razao_social' => 'Cliente 01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'cpf_cnpj' => '60521443270',
                'nome_razao_social' => 'Cliente 02',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'cpf_cnpj' => '62068151103',
                'nome_razao_social' => 'Cliente 03',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'cpf_cnpj' => '24193150810',
                'nome_razao_social' => 'Cliente 04',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'cpf_cnpj' => '04155450801',
                'nome_razao_social' => 'Cliente 05',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($data as $cliente) {
            $this->db->table('clientes')->insert($cliente);
        }
    }
}

// Encontrei no site:https://codeigniter.com/user_guide/dbmgmt/seeds.html