<?php

class Food extends Conn
{
    public function getProduct($where = null): array
    {
        return $this->stmt("SELECT id, name, category, price, img FROM product $where ORDER BY id DESC")->fetchAll();
    }

    public function addCategory($data)
    {
        $this->stmt("INSERT INTO category (name) VALUES (?)", $data);
    }

    public function updateCategory($data)
    {
        $this->stmt("UPDATE category SET name = ? WHERE id = ?", $data);
    }

    public function deleteCategory($id)
    {
        $this->stmt("DELETE FROM category WHERE id = ?", $id);
    }

    public function getCategory(): array
    {
        return $this->stmt("SELECT id, name FROM category")->fetchAll();
    }

}