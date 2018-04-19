package projectrider.entity;

import javax.persistence.*;

@Entity
@Table(name = "projects")
public class Project {
    private Integer id;
    private String title;
    private String description;
    private  long budget;

    public Project() {
    }


    public Project(String title, String description, long budget) {
        this.title = title;
        this.description = description;
        this.budget = budget;
    }

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    @Column(columnDefinition = "TEXT" ,nullable = false)
    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    @Column(columnDefinition = "TEXT",nullable = false)
    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    @Column(columnDefinition = "INT",nullable = false)
    public long getBudget() {
        return budget;
    }

    public void setBudget(long budget) {
        this.budget = budget;
    }
}
