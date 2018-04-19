package ClassesAndObjexts.AverageGraades;
import java.util.ArrayList;
import java.util.Comparator;
import java.util.Scanner;
import java.util.stream.Collectors;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int numberOfStudents = Integer.parseInt(scanner.nextLine());
        Student[] students = new Student[numberOfStudents];

        for (int i = 0; i < numberOfStudents; i++) {
            String[] tokens = Arrays.stream(scanner.nextLine().split(" ")).toArray(String[]::new);
            String name = tokens[0];

            ArrayList<Double> currentStudentGrades = new ArrayList<>();
            for (int grade = 1; grade < tokens.length; grade++) {
                currentStudentGrades.add(Double.parseDouble(tokens[grade]));
            }

            Student currentStudent = new Student(name, currentStudentGrades);
            students[i] = currentStudent;
        }

        Arrays.stream(students)
                .filter(avr -> avr.getAverageGrade() >= 5.0)
                .sorted(
                        Comparator.comparing(Student::getName)
                                .thenComparing(Comparator.comparing(Student::getAverageGrade).reversed())
                ).forEach(s -> {
            System.out.printf("%s -> %.2f%n", s.getName(), s.getAverageGrade());
        });
        //main ends here
    }
}

class Student {
    private String name;

    private ArrayList<Double> grades; //don't know how to make a proper set method for an array

    private double averageGrade;

    public String getName() {
        return this.name;
    }
    public void setName(String name) {
        this.name = name;
    }

    public double getAverageGrade() {
        double sum = 0.0;
        for (Double currentGrade : this.grades) {
            sum += currentGrade;
        }

        return sum / this.grades.size();
    }

    public ArrayList<Double> getGrades() {
        return grades;
    }

    public void setGrades(ArrayList<Double> grades) {
        this.grades = grades;
    }

    public Student(String name, ArrayList<Double> grades) {
        this.name = name;
        this.grades = grades;
    }
}