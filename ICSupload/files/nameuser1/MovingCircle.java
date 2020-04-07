package graphics;

import java.awt.Color;

import hsa2.GraphicsConsole;
public class MovingCircle {

	public static void main(String [] args) {
		new MovingCircle();

		//Dodge the incoming balls, if you get hit game ends



	}



	GraphicsConsole gc = new GraphicsConsole (1000, 800);
	//		int x = 50;
	//		int y = 100;
	//		int w = 300;
	Ball b1, b2, b3, b4, b5, b6, b7, b8;




	MovingCircle(){
		b1 = new Ball(9, 300, 50, 50);			
		b1.vx = 10;
		b4 = new Ball(9, 715, 50, 50);
		b4.vx = 10;
		b2 = new Ball(9, 500, 50, 50);
		b2.vx = 20;
		b5 = new Ball(9, 100, 50, 50);
		b5.vx = 20;
		b3 = new Ball(9, 20, 60, 60);
		b3.vx = 30;
		b6 = new Ball(9, 400, 60, 60);
		b6.vx = 30;
		b7 = new Ball(9, 600, 60, 60);
		b7.vx = 30;
		b8 = new Ball(9, 200, 60, 60);
		b8.vx = 30;
		gc.enableMouseMotion();

		gc.showDialog("Don't Let the Ball Hit you", "Ballgame");
		//start loop;			
		while(true) {
			drawGraphics();

			//move ball1
			b1.x += b1.vx;
			if (b1.x>1000) b1.x = 9;
			b4.x += b4.vx;
			if (b4.x>1000) b4.x = 9;
			b2.x += b2.vx;
			if (b2.x>1000) b2.x = 9;
			b5.x += b5.vx;
			if (b5.x>1000) b5.x = 9;
			b3.x += b3.vx;
			if (b3.x>1000) b3.x = 9;
			b6.x += b6.vx;
			if (b6.x>1000) b6.x = 9;
			b7.x += b7.vx;
			if (b7.x>1000) b7.x = 9;
			b8.x += b8.vx;
			if (b8.x>1000) b8.x = 9;

			//get mouse location
			int mx = gc.getMouseX();
			int my = gc.getMouseY();
			//does ball1 hit the mouse?
			if (b1.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b4.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b2.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b5.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b3.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b6.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b7.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}
			if (b8.contains(mx,my)) {
				gc.showDialog("GAME OVER", "MovingBall");
				System.exit(0); 
			}


			
			gc.sleep(1);//sleep for 10 milliseconds
		}
	}
	void drawGraphics() {
		synchronized(gc) {
			gc.clear();
			gc.setColor(Color.RED);
			gc.fillOval(b1.x, b1.y, b1.width, b1.height);
			gc.setColor(Color.BLUE);
			gc.fillOval(b4.x, b4.y, b4.width, b4.height);
			gc.setColor(Color.GREEN);
			gc.fillOval(b2.x, b2.y, b2.width, b2.height);
			gc.setColor(Color.darkGray);
			gc.fillOval(b5.x, b5.y, b5.width, b5.height);
			gc.setColor(Color.ORANGE);
			gc.fillOval(b3.x, b3.y, b3.width, b3.height);
			gc.setColor(Color.CYAN);
			gc.fillOval(b6.x, b6.y, b6.width, b6.height);
			gc.setColor(Color.BLACK);
			gc.fillOval(b7.x, b7.y, b7.width, b7.height);
			gc.setColor(Color.MAGENTA);
			gc.fillOval(b8.x, b8.y, b8.width, b8.height);
			gc.setColor(Color.YELLOW);

		}
	}

}
