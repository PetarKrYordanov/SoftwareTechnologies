package cat.entity;

import javax.persistence.*;
import javax.validation.constraints.NotNull;

@Entity
@Table(name = "cats")
public class Cat {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;

    @Column
    @NotNull
    private String name;
    @Column
    @NotNull
    private String nickname;

    @Column
    private double price;

    public Cat() {
    }

    public Cat(String name, String nickname, double price) {

        this.name = name;
        this.nickname = nickname;
        this.price = price;
    }

    public Cat(int id, String name, String nickname, double price) {

        this.id = id;
        this.name = name;
        this.nickname = nickname;
        this.price = price;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getNickname() {
        return nickname;
    }

    public void setNickname(String nickname) {
        this.nickname = nickname;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }
}
