package ClassesAndObjexts.IntersectionOfCircles;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Circle first = new Circle(
                new Point(scanner.nextInt(), scanner.nextInt()),
                scanner.nextInt()
        );

        Circle second = new Circle(
                new Point(scanner.nextInt(), scanner.nextInt()),
                scanner.nextInt()
        );

        if(intersect(first, second)){
            System.out.println("Yes");
        }else {
            System.out.println("No");
        }
    }

    private static boolean intersect(Circle first, Circle second) {
        double firstPart = Math.pow(
                first.getCenter().getX()- second.getCenter().getX(),
                2);

        double secondPart = Math.pow(
                first.getCenter().getY()-second.getCenter().getY(),
                2);

        double distance = Math.sqrt(firstPart+secondPart);

        if (distance> first.getRadius() + second.getRadius()){
            return false;
        }else {
            return  true;
        }

    }
    }

